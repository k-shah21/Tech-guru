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
    protected function formatTags(?string $tags): ?string
    {
        return $tags ? collect(explode(',', $tags))
            ->map(fn($tag) => trim($tag))
            ->filter()
            ->implode(', ') : null;
    }

    protected function generateUniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $query = Blog::where('slug', 'LIKE', "{$slug}%");
        if ($ignoreId) $query->where('id', '!=', $ignoreId);
        $count = $query->count();
        return $count ? "{$slug}-" . ($count + 1) : $slug;
    }

    protected function handleImageUpload(Request $request, ?string $existingPath = null): ?string
    {
        if ($request->hasFile('main_image')) {
            if ($existingPath && Storage::disk('public')->exists($existingPath)) {
                Storage::disk('public')->delete($existingPath);
            }
            return $request->file('main_image')->store('blogs', 'public');
        }
        return $existingPath;
    }
    protected function blogValidationRules(bool $isUpdate = false): array
    {
        return [
            'title' => 'required|string|max:120',
            'heading' => 'required|string|max:255',
            'meta_description' => 'required|string|max:160',
            'tags' => 'required|string|max:255',
            'content' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => $isUpdate ? 'required_with:main_image|string|max:50' : 'required_with:main_image|string|max:40',

        ];
    }

    public function index()
    {
        $blogs = Blog::latest()->get();
        $publicCount = Blog::where('status', 'published')->count();

        return view('admin.blogs', compact('blogs', 'publicCount'));
    }

    public function show()
    {
        return view('admin.blogform.create');
    }

    public function user()
    {
        $blogs = Blog::latest()->take(4)->get();

        return view('pages.home', compact('blogs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate($this->blogValidationRules());

        $validated['tags'] = $this->formatTags($validated['tags']);
        $validated['main_image'] = $this->handleImageUpload($request);
        $validated['slug'] = $this->generateUniqueSlug($validated['title']);

        try {
            DB::transaction(fn() => Blog::create($validated));

            return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
        } catch (\Throwable $e) {
            Log::error('Blog creation failed', [
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);

            generatesitemap();

            return back()->withInput()->with('error', 'Something went wrong while creating the blog.');
        }
    }


    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        generatesitemap();
        return view('admin.blogform.editblog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate($this->blogValidationRules(isUpdate: true));

        $validated['tags'] = $this->formatTags($validated['tags']);
        $validated['main_image'] = $this->handleImageUpload($request, $blog->main_image);

        if ($blog->title !== $validated['title']) {
            $validated['slug'] = $this->generateUniqueSlug($validated['title'], $blog->id);
        }

        try {
            DB::transaction(fn() => $blog->update($validated));

            return redirect()->route('blog.index')->with('success', 'Blog updated successfully!');
        } catch (\Throwable $e) {
            Log::error('Blog update failed', [
                'message' => $e->getMessage(),
                'blog_id' => $id,
            ]);

            generatesitemap();

            return back()->withInput()->with('error', 'Something went wrong while updating the blog.');
        }
    }


    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        generatesitemap();
        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog deleted successfully!');
    }

    public function all()
    {
        $blogs = Blog::latest()->paginate(perPage: 9);

        return view('pages.all-blogs', compact('blogs'));
    }

    public function showBlogDetails($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();

        $recentBlog = Blog::where('id', '!=',  $blog->id)
            ->latest()
            ->take(3)
            ->get();

        $previousBlog = Blog::where('id', '<', $blog->id)->latest('id')->first();
        $nextBlog = Blog::where('id', '>', $blog->id)->oldest('id')->first();

        generatesitemap();
        return view('pages.blog-details', compact('blog', 'recentBlog', 'previousBlog', 'nextBlog'));
    }
}
