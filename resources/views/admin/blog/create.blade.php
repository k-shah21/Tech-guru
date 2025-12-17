<x-adminlayout>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@latest/es2021/jodit.fat.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/jodit@latest/es2021/jodit.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.7.6/es2021/jodit.min.css" />
    </head>

    <body>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Create Blog</h2>
            <a href="/blogs" class="btn btn-outline-dark px-4">Back</a>
        </div>
        @if ($errors->any())
            <div class="mb-4 p-4 rounded-lg bg-red-500/10 text-red-400 z-50">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


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
                        <input type="text" name="title" class="form-control form-control-lg rounded-3"
                            placeholder="Enter blog title">
                    </div>

                    <!-- Heading -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Heading</label>
                        <input type="text" name="heading" class="form-control form-control-lg rounded-3"
                            placeholder="Enter main heading">
                    </div>

                    <!-- Meta Description -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control rounded-3"
                            placeholder="Write short SEO description..."></textarea>
                        <small class="text-muted">Recommended: 50–160 characters.</small>
                    </div>

                    <!-- Tags -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Tags (Comma Seprated)</label>
                        <input type="text" name="tags" class="form-control rounded-3"
                            placeholder="Type a tag and press Enter">
                    </div>

                    <!-- Content -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Content</label>
                        <textarea id="editor" name="content"></textarea>
                    </div>

                    <!-- Status -->
                    <div class="mb-4">
                        <label for="status" class="form-label fw-semibold">Visibility</label>

                        <select id="status" name="status" class="form-select form-select-lg rounded-3">
                            <option value="published" selected>Public</option>
                            <option value="draft">Draft</option>
                        </select>

                        <small class="text-muted">
                            Public blogs are visible on the website. Drafts are hidden.
                        </small>
                    </div>


                    <!-- Main Image -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Main Image</label>

                        <div class="mb-2 text-muted small">
                            Required size: <strong>324 × 221 px</strong><br>
                            Allowed formats: <strong>WEBP, JPG, PNG</strong><br>
                            Recommended format: <strong>WEBP</strong> (best for SEO & speed)
                        </div>

                        <input type="file" name="main_image" class="form-control rounded-3">
                    </div>

                    <!-- Main Image Alt -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold">Main Image Alt</label>
                        <input type="text" name="image_alt" class="form-control rounded-3"
                            placeholder="Describe the main image for SEO">
                        <small class="text-muted">Maximum 50 characters allowed.</small>
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

        <script src="https://cdn.jsdelivr.net/npm/jodit@latest/es2021/jodit.fat.min.js"></script>
        <script src="https://unpkg.com/jodit@latest/es2021/jodit.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.7.6/es2021/jodit.min.js"></script>
        <script>
            const editor = Jodit.make('#editor', {
                buttons: ['bold', 'italic', 'underline', '|', 'ul', 'ol']
            });
        </script>
    </body>

    </html>


</x-adminlayout>