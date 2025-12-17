<x-adminlayout>
    <style>
        .page-wrap {
            padding: 30px;
            max-width: 1300px;
            margin: 0 auto;
        }

        .add-btn {
            background: #eeeeee;
            padding: 10px 16px;
            border-radius: 10px;
            color: black;
            text-decoration: none;
            font-weight: 600;
        }

        .blog-thumb {
            width: 70px;
            height: 50px;
            object-fit: cover;
            border-radius: 6px;
        }
    </style>

    <div class="page-wrap">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Blog List</h2>

            <a href="/admin/blog/create" class="add-btn">
                <i class="bi bi-plus-circle me-1"></i>
                Add New Blog
            </a>
        </div>

        <!-- Stats -->
        <div class="row g-4 mb-4">
            <div class="col-md-6">
                <div class="card card-rounded shadow-soft stats-card p-4">
                    <h5>Total Bookings</h5>
                    <div class="display-6 fw-bold text-success">{{ $blogs->count() }}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-rounded shadow-soft stats-card p-4">
                    <h5>Total Public</h5>
                    <div class="display-6 fw-bold text-success"> {{ $publicCount }}</div>
                </div>
            </div>



        </div>




        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body">

                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 60px;">#ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th style="width: 150px;">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id }}</td>

                                {{-- Image --}}
                                <td>
                                    @if($blog->main_image)
                                        <img src="{{ asset('storage/' . $blog->main_image) }}" class="blog-thumb"
                                            alt="{{ $blog->image_alt ?? $blog->title }}">
                                    @else
                                        <span class="text-muted">No Image</span>
                                    @endif
                                </td>

                                {{-- Title --}}
                                <td class="fw-semibold">
                                    {{ $blog->title }}
                                </td>

                                {{-- Tags --}}
                                <td>
                                    @if($blog->tags)
                                        @foreach(explode(',', $blog->tags) as $tag)
                                            <span class="badge bg-primary me-1">
                                                {{ trim($tag) }}
                                            </span>
                                        @endforeach
                                    @else
                                        <span class="text-muted">No Tags</span>
                                    @endif
                                </td>

                                {{-- Status --}}
                                <td>
                                    {{ $blog->status }}
                                </td>

                                {{-- Date --}}
                                <td>
                                    {{ $blog->created_at->format('M d, Y') }}
                                </td>

                                {{-- Actions --}}
                                <td>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-sm btn-outline-warning">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('blog.delete', $blog->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Delete this blog?');">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-sm btn-outline-danger ms-2">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-4">
                                    No blogs found.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-adminlayout>