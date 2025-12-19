<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.7.6/es2021/jodit.min.css" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jodit@latest/es2021/jodit.fat.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/jodit@latest/es2021/jodit.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.7.6/es2021/jodit.min.css" />

    <!-- Alpine Js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <style>
        body {
            background: #f0f2f5;
            overflow-x: hidden;
        }

        .btn-light {
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: none;
        }

        /* Sidebar */
        #sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            height: calc(100% - 56px);
            width: 250px;
            background: #eeeeee;
            border-right: 1px solid #e2e2e2;
            transition: all 0.3s ease;
            padding-top: 20px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
        }

        #sidebar.collapsed {
            width: 70px;
        }

        #sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #333;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 6px 12px;
            transition: 0.3s;
            font-weight: 500;
        }

        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            background: #ffffff;
        }

        #sidebar.collapsed .nav-link span {
            display: none;
        }

        /* Main content */
        #content {
            margin-left: 250px;
            margin-top: 56px;
            padding: 20px;
            transition: 0.3s;
            background-color: white;
        }

        #content.collapsed {
            margin-left: 70px;
        }

        .nav-shadow {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .nav-Bg {
            background: #EEEEEE;
        }

        .bi-person-circle,
        .bi-bell {
            color: white;
            cursor: pointer;
        }

        #toggleBtn {
            outline-color: white;
        }

        #sidebar.collapsed .nav-link {
            justify-content: center;
        }

        .log_out {
            color: black;
        }
    </style>

</head>

<body>



    <!-- NAVBAR -->
    <nav class="navbar navbar-light fixed-top nav-shadow px-3 nav-Bg">
        <div class="d-flex align-items-center">
            <button id="toggleBtn" class="btn btn-light me-3">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="d-flex align-items-center">
            <i class="bi bi-bell fs-5 me-4 text-black"></i>
            <i class="bi bi-person-circle fs-4 text-black"></i>
        </div>
    </nav>


    <!-- SIDEBAR -->
    <div id="sidebar">
        <ul class="nav d-flex flex-column justify-content-between h-100">
            <li>
                <a href="/admin/dashboard" class="nav-link active">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
                <a href="/admin/blogs" class="nav-link">
                    <i class="bi bi-people"></i>
                    <span>Blog</span>
                </a>

                <form action="/admin/sitemap" method="POST" class="nav-link">
                    @csrf
                    <button type="submit">Generate Sitemap</button>
                </form>

            </li>
            <li style="border-top: 1px solid #e2e2e2; padding-top: 10px;">
                <form style="width: 100%;">
                    {{-- method="POST" action="{{ route('logout') }}" --}}
                    @csrf
                    <button type="submit" class="nav-link log_out"
                        style="border: none; background: none; width: 100%; text-align: left; cursor: pointer;">
                        <i class="bi bi-box-arrow-right log_out"></i>
                        <span class="log_out">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>


    <!-- CONTENT SLOT -->
    <div id="content">
        {{$slot}}
    </div>

    {{-- Bootstrap Toast Message --}}
    @if(session('message'))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3500)"
        class="position-fixed top-0 end-0 p-3"
        style="z-index: 9999; margin-top: 80px;">
        <div class="toast show shadow border-0">
            <div class="toast-body d-flex align-items-center gap-2 bg-white rounded">

                <!-- Icon -->
                <span class="badge bg-success rounded-circle d-flex align-items-center justify-content-center"
                    style="width:32px;height:32px;">
                    ✓
                </span>

                <!-- Message -->
                <span class="small fw-medium text-dark">
                    {{ session('message') }}
                </span>

                <!-- Close -->
                <button
                    type="button"
                    class="btn-close ms-auto"
                    @click="show = false"
                    aria-label="Close">
                </button>
            </div>
        </div>
    </div>
    @endif



    <script>
        const toggleBtn = document.getElementById('toggleBtn');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('collapsed');
        });

        const navLinks = document.querySelectorAll('.nav-link');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            link.classList.remove('active');

            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jodit/4.7.6/es2021/jodit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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