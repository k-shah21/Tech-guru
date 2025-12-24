<x-layouts.adminlayout>

    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="fw-bold mb-1">Content Management</h2>
                <p class="text-white-50 small">Manage your website's insights, stories, and articles.</p>
            </div>

            <a href="/admin/blog/create" class="btn btn-gradient">
                <i class="ri-add-circle-line me-2"></i>Create New Insight
            </a>
        </div>

        <!-- Stats -->
        <div class="row g-4 mb-5">
            <div class="col-md-6 col-xl-3">
                <div class="card p-4">
                    <div class="d-flex align-items-center gap-3">
                        <div class="stats-icon">
                            <i class="ri-file-list-3-line"></i>
                        </div>
                        <div>
                            <h6 class="text-white-50 mb-1">Total Insights</h6>
                            <h4 class="fw-bold mb-0">{{ $blogs->count() }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table Card -->
        <div class="card pt-4">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th class="ps-4">ID</th>
                            <th>Preview</th>
                            <th>Topic & Title</th>
                            <th>Categories/Tags</th>
                            <th>Creation Date</th>
                            <th class="text-end pe-4">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse($blogs as $blog)
                        <tr class="border-b border-white/5 hover:bg-white/5 transition-colors">
                            <td class="ps-4 text-white-50">#{{ $blog->id }}</td>

                            <td>
                                @if($blog->main_image)
                                <img src="{{ asset('storage/' . $blog->main_image) }}" class="preview-thumb"
                                    alt="{{ $blog->image_alt ?? $blog->title }}">
                                @else
                                <div class="preview-thumb bg-dark d-flex align-items-center justify-content-center">
                                    <i class="ri-image-line text-white-10 fs-4"></i>
                                </div>
                                @endif
                            </td>

                            <td>
                                <div class="fw-bold text-white mb-1">{{ $blog->title }}</div>
                                <div class="small text-white-25 text-truncate" style="max-width: 300px;">{{ $blog->heading }}</div>
                            </td>

                            <td>
                                @if($blog->tags)
                                <div class="d-flex flex-wrap gap-1">
                                    @foreach(explode(',', $blog->tags) as $tag)
                                    <span class="badge-tag">
                                        {{ trim($tag) }}
                                    </span>
                                    @endforeach
                                </div>
                                @else
                                <span class="text-white-10 small">None</span>
                                @endif
                            </td>

                            <td class="text-white-50 small">
                                {{ $blog->created_at->format('M d, Y') }}
                            </td>

                            <td class="text-end pe-4">
                                <div class="d-flex justify-content-end gap-2">
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn-action btn-action-edit">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <form action="{{ route('blog.delete', $blog->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Permanently delete this insight?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-action btn-action-delete">
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-5 text-white-50">
                                <i class="ri-inbox-line fs-1 d-block mb-3 opacity-25"></i>
                                No insights have been published yet.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layouts.adminlayout>