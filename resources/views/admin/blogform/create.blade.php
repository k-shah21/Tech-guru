<x-layouts.adminlayout>

    <div class="container-fluid pb-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold mb-1">Create New Insight</h2>
                <p class="text-white-50 small">Share your expert knowledge with the Tech Guru community.</p>
            </div>
            <a href="/admin/blogs" class="btn btn-outline-light px-4 rounded-3">
                <i class="ri-arrow-left-line me-2"></i>Back to Insights
            </a>
        </div>

        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="card p-4">
                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Insight Title</label>
                            <input type="text" name="title" value="{{ old('title') }}"
                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                placeholder="e.g., The Future of Cloud Computing">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">SEO Heading</label>
                            <input type="text" name="heading" value="{{ old('heading') }}"
                                class="form-control" placeholder="Catchy heading for search results">
                            @error('heading') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Content Body</label>
                            <textarea id="editor" name="content">{{ old('content') }}</textarea>
                            @error('content') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card p-4 mb-4">
                        <h5 class="fw-bold mb-4" style="color: #edc458;">Media & SEO</h5>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50 d-block">Main Visual</label>
                            <div class="p-3 border border-white-10 rounded-3 text-center mb-3 bg-dark">
                                <i class="ri-image-add-line fs-1 text-white-10"></i>
                                <p class="small text-white-50 mt-2 mb-0">Recommended size: <br><strong class="text-warning">324 × 221 px</strong></p>
                            </div>
                            <input type="file" name="main_image" class="form-control">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Alt Text (Accessibility)</label>
                            <input type="text" name="image_alt" value="{{ old('image_alt') }}"
                                class="form-control" placeholder="e.g., Team working on servers">
                            @error('image_alt') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold text-white-50">Discovery Tags</label>
                            <input type="text" name="tags" value="{{ old('tags') }}"
                                class="form-control" placeholder="Cloud, Tech, Strategy (comma separated)">
                            @error('tags') <small class="text-danger mt-1 d-block">{{ $message }}</small> @enderror
                        </div>

                        <div>
                            <label class="form-label fw-bold text-white-50">Meta Summary</label>
                            <textarea name="meta_description" rows="3" class="form-control"
                                placeholder="Short summary for search engines...">{{ old('meta_description') }}</textarea>
                            <small class="text-white-25 mt-1 d-block">Optimal length: 50–160 chars.</small>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient w-100 py-3 shadow-lg">
                        <i class="ri-save-line me-2"></i>Publish Insight
                    </button>
                </div>
            </div>
        </form>
    </div>

</x-layouts.adminlayout>