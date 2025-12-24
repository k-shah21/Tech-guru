<x-layouts.adminlayout>

    <div class="container-fluid pb-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold mb-1">Edit Insight</h2>
                <p class="text-white-50 small">Updating: <span class="text-white fw-bold">{{ $blog->title }}</span></p>
            </div>
            <a href="/admin/blogs" class="btn btn-outline-light px-4 rounded-3">
                <i class="ri-arrow-left-line me-2"></i>Discard Changes
            </a>
        </div>

        <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="card p-4">
                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Insight Title</label>
                            <input type="text" name="title" value="{{ old('title', $blog->title) }}"
                                class="form-control form-control-lg @error('title') is-invalid @enderror">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">SEO Heading</label>
                            <input type="text" name="heading" value="{{ old('heading', $blog->heading) }}"
                                class="form-control">
                            @error('heading') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Content Body</label>
                            <textarea id="editor" name="content">{{ old('content', $blog->content) }}</textarea>
                            @error('content') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card p-4 mb-4">
                        <h5 class="fw-bold mb-4" style="color: #edc458;">Media & SEO</h5>

                        <div class="mb-4 text-center">
                            <label class="form-label fw-bold text-white-50 d-block text-start">Current Image</label>
                            <div class="mb-3 position-relative group">
                                <img src="{{ asset('storage/' . $blog->main_image) }}" class="img-fluid rounded-3 border border-white-10" alt="Current image">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <span class="badge bg-warning text-dark px-3 py-2 rounded-3 shadow">ACTIVE</span>
                                </div>
                            </div>
                            <input type="file" name="main_image" class="form-control">
                            <p class="small text-white-25 mt-2 mb-0">Replace if needed (324 × 221 px)</p>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Alt Text</label>
                            <input type="text" name="image_alt" value="{{ old('image_alt', $blog->image_alt) }}"
                                class="form-control">
                            @error('image_alt') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Tags</label>
                            <input type="text" name="tags" value="{{ old('tags', $blog->tags) }}"
                                class="form-control">
                            @error('tags') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div>
                            <label class="form-label fw-bold text-white-50">Meta Summary</label>
                            <textarea name="meta_description" rows="3" class="form-control">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient w-100 py-3 shadow-lg">
                        <i class="ri-refresh-line me-2"></i>Update Insight
                    </button>
                    
                    <div class="mt-3 text-center">
                         <p class="small text-white-50"><i class="ri-time-line me-1"></i>Last updated: {{ $blog->updated_at->format('M d, Y') }}</p>
                    </div>
                </div>
            </div>
        </form>
    </div>

</x-layouts.adminlayout>