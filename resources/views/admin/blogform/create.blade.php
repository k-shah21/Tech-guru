<x-layouts.adminlayout>


    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Create Blog</h2>
        <a href="/admin/blogs" class="btn btn-outline-dark px-4">Back</a>
    </div>



    <form action=" {{ route('blog.store') }}" method="POST" enctype="multipart/form-data" class="pb-5">

        @csrf

        <div class="card shadow-sm border-0 rounded-4 mb-4">
            <div class="card-header bg-light fw-bold py-3 rounded-top-4">
                Blog Content
            </div>

            <div class="card-body">

                <!-- Title -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Title</label>
                    <input type="text"
                        name="title"
                        value="{{ old('title') }}"
                        class="form-control form-control-lg rounded-3 @error('title') is-invalid @enderror"
                        placeholder="Enter blog title">

                    @error('title')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <!-- Heading -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Heading</label>
                    <input type="text"
                        value="{{ old('heading') }}"
                        name="heading" class="form-control form-control-lg rounded-3"
                        placeholder="Enter main heading">
                    @error('heading')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Meta Description -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Meta Description</label>
                    <textarea name="meta_description"
                        value="{{ old('meta_description') }}"
                        rows="3" class="form-control rounded-3"
                        placeholder="Write short SEO description..."></textarea>
                    <small class="text-muted">Recommended: 50–160 characters.</small>
                    @error('meta_description')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Tags -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Tags (Comma Seprated)</label>
                    <input type="text"
                        value="{{ old('tags') }}"
                        name="tags" class="form-control rounded-3"
                        placeholder="Type a tag and press Enter">
                    @error('tags')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <!-- Content -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Content</label>
                    <textarea id="editor"
                        value="{{ old('content') }}" name="content"></textarea>
                    @error('content')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>


                <!-- Main Image -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Main Image</label>

                    <div class="mb-2 text-muted small">
                        Required size: <strong class="text-danger">324 × 221 px</strong><br>
                        Allowed formats: <strong>WEBP, JPG, PNG</strong><br>
                        Recommended format: <strong>WEBP</strong> <span class="text-success"> (best for SEO & speed) </span>
                    </div>

                    <input type="file" name="main_image" class="form-control rounded-3">
                </div>

                <!-- Main Image Alt -->
                <div class="mb-4">
                    <label class="form-label fw-semibold">Main Image Alt</label>
                    <input type="text" name="image_alt" value="{{ old('image_alt') }}" class="form-control rounded-3"
                        placeholder="Describe the main image for SEO">
                    <small class="text-muted">Maximum 50 characters allowed.</small>
                    @error('image_alt')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button class="btn btn-dark px-5 py-2 rounded-3 fs-6" type="submit">
                Create
            </button>
        </div>

    </form>

    </x-adminlayout>