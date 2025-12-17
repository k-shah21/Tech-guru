<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        $publicCount = Blog::where('status', 'published')->count();

        return view('admin.blogs', compact('blogs', 'publicCount'));
    }

    public function show()
    {
        return view('admin.blog.create');
    }

    public function user()
    {
        $blogs = Blog::latest()->take(4)->get();

        return view('home', compact('blogs'));
    }

    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $validated = $request->validate([
                'title' => 'required|string|max:120',
                'heading' => 'required|string|max:255',
                'meta_description' => 'nullable|string|max:160',
                'tags' => 'nullable|string|max:255',
                'content' => 'required|string',

                'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'image_alt' => 'required_with:main_image|string|max:40',

                'status' => 'required|in:published,draft',
            ]);

            // Format tags
            if (! empty($validated['tags'])) {
                $validated['tags'] = collect(explode(',', $validated['tags']))
                    ->map(fn ($tag) => trim($tag))
                    ->filter()
                    ->implode(', ');
            }

            // Handle image upload
            if ($request->hasFile('main_image')) {
                $validated['main_image'] = $request
                    ->file('main_image')
                    ->store('blogs', 'public');
            }

            // Generate UNIQUE slug
            $slug = Str::slug($validated['title']);
            $count = Blog::where('slug', 'LIKE', "{$slug}%")->count();
            $validated['slug'] = $count ? "{$slug}-".($count + 1) : $slug;

            Blog::create($validated);

            DB::commit();

            return redirect()
                ->route('blog.index')
                ->with('success', 'Blog created successfully!');
        } catch (\Throwable $e) {

            DB::rollBack();

            Log::error('Blog creation failed', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while creating the blog.');
        }
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blog.crud.editblog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $blog = Blog::findOrFail($id);

            $validated = $request->validate([
                'title' => 'required|string|max:120',
                'heading' => 'required|string|max:255',
                'meta_description' => 'nullable|string|max:160',
                'tags' => 'nullable|string|max:255',
                'content' => 'required|string',

                'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
                'image_alt' => 'required_with:main_image|string|max:50',
            ]);

            // Format tags
            if (! empty($validated['tags'])) {
                $validated['tags'] = collect(explode(',', $validated['tags']))
                    ->map(fn ($tag) => trim($tag))
                    ->filter()
                    ->implode(', ');
            }

            // Replace image safely
            if ($request->hasFile('main_image')) {

                // Delete old image
                if ($blog->main_image && Storage::disk('public')->exists($blog->main_image)) {
                    Storage::disk('public')->delete($blog->main_image);
                }

                $validated['main_image'] = $request
                    ->file('main_image')
                    ->store('blogs', 'public');
            }

            // Update slug only if title changed
            if ($blog->title !== $validated['title']) {
                $slug = Str::slug($validated['title']);
                $count = Blog::where('slug', 'LIKE', "{$slug}%")
                    ->where('id', '!=', $blog->id)
                    ->count();

                $validated['slug'] = $count ? "{$slug}-".($count + 1) : $slug;
            }

            $blog->update($validated);

            DB::commit();

            return redirect()
                ->route('blog.index')
                ->with('success', 'Blog updated successfully!');
        } catch (\Throwable $e) {

            DB::rollBack();

            Log::error('Blog update failed', [
                'message' => $e->getMessage(),
                'blog_id' => $id,
            ]);

            return back()
                ->withInput()
                ->with('error', 'Something went wrong while updating the blog.');
        }
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog deleted successfully!');
    }

    public function all()
    {
        $blogs = Blog::latest()->paginate(perPage: 9);

        return view('Blogs.all-blogs', compact('blogs'));
    }

    public function showBlogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('Blogs.show', compact('blog'));
    }
}
