<x-adminlayout>

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Edit Blog: {{ $blog->title }}</h2>

        <a href="{{ route('blog.index') }}" class="btn btn-outline-dark px-4">
            Back
        </a>
    </div>

    <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data" class="pb-5">

        @csrf
        @method('PUT')

        <div class="card shadow-sm border-0 rounded-4 mb-4">
            <div class="card-header bg-light fw-bold py-3 rounded-top-4">
                Blog Content
            </div>

            <div class="card-body">

                <!-- Title -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" class="form-control form-control-lg rounded-3"
                        value="{{ old('title', $blog->title) }}" placeholder="Enter blog title">
                </div>

                <!-- Heading -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Heading</label>
                    <input type="text" name="heading" class="form-control form-control-lg rounded-3"
                        value="{{ old('heading', $blog->heading) }}" placeholder="Enter main heading">
                </div>

                <!-- Meta Description -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control rounded-3"
                        placeholder="Write short SEO description...">{{ old('meta_description', $blog->meta_description) }}</textarea>
                    <small class="text-muted">Recommended: 50–160 characters.</small>
                </div>

                <!-- Tags -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Tags (Comma Separated)</label>
                    <input type="text" name="tags" class="form-control rounded-3" value="{{ old('tags', $blog->tags) }}"
                        placeholder="Type tags separated by commas">
                </div>

                <!-- Content -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Content</label>
                    <textarea id="editor" name="content" class="form-control rounded-3"
                        rows="7">{{ old('content', $blog->content) }}</textarea>
                </div>

                <!-- Main Image -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Main Image</label>

                    <div class="mb-2 text-muted small">
                        Required size: <strong>324 × 221 px</strong><br>
                        Allowed formats: <strong>WEBP, JPG, PNG</strong><br>
                        Recommended format: <strong>WEBP</strong>
                    </div>

                    <input type="file" name="main_image" class="form-control rounded-3">

                    @if($blog->main_image)
                        <div class="mt-3">
                            <p class="text-muted mb-1">Current Image:</p>
                            <img src="{{ asset('storage/' . $blog->main_image) }}" class="rounded" width="200"
                                alt="{{ $blog->image_alt }}">
                        </div>
                    @endif
                </div>

                <!-- Main Image Alt -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Main Image Alt</label>
                    <input type="text" name="image_alt" class="form-control rounded-3"
                        value="{{ old('image_alt', $blog->image_alt) }}" placeholder="Describe the main image for SEO">
                    <small class="text-muted">Maximum 50 characters allowed.</small>
                </div>

            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button class="btn btn-dark px-5 py-2 rounded-3 fs-6" type="submit">
                Update Blog
            </button>
        </div>

    </form>

    <!-- JODIT JS -->
    <script>
        const editor = Jodit.make('#editor', {
            height: 350,
            buttons: [
                'bold', 'italic', 'underline', '|',
                'ul', 'ol', '|',
                'align', 'link', 'image'
            ]
        });
    </script>

</x-adminlayout>