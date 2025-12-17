<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:120',
            'heading' => 'required|string|max:255',
            'meta_description' => 'nullable|string|max:160',
            'tags' => 'nullable|string|max:255',
            'content' => 'required|string',

            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'required|string|max:40',

            'status' => 'required|in:published,draft',
        ]);

        if (! empty($validated['tags'])) {
            $validated['tags'] = collect(explode(',', $validated['tags']))
                ->map(fn ($tag) => trim($tag))
                ->filter()
                ->implode(', ');
        }

        // Handle image upload
        if ($request->hasFile('main_image')) {
            $imagePath = $request->file('main_image')->store('blogs', 'public');
            $validated['main_image'] = $imagePath;
        }

        // Optional: auto slug
        $validated['slug'] = Str::slug($validated['title']);

        Blog::create($validated);

        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blog.crud.editblog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:120',
            'heading' => 'required|string|max:255',
            'meta_description' => 'nullable|string|max:160',
            'tags' => 'nullable|string|max:255',
            'content' => 'required|string',
            'main_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'image_alt' => 'nullable|string|max:50',
        ]);

        // Update image if uploaded
        if ($request->hasFile('main_image')) {
            $validated['main_image'] = $request->file('main_image')->store('blogs', 'public');
        }

        // Update slug only if title changed
        if ($blog->title !== $validated['title']) {
            $validated['slug'] = Str::slug($validated['title']).'-'.time();
        }

        $blog->update($validated);

        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog updated successfully!');
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect()
            ->route('blog.index')
            ->with('success', 'Blog deleted successfully!');
    }
}
