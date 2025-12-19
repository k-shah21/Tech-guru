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

        #sidebar {
            position: fixed;
            top: 56px;
            left: 0;
            min-height: calc(100vh - 56px);
            width: 250px;
            background: #eeeeee;
            border-right: 1px solid #e2e2e2;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
        }

        #sidebar.collapsed {
            width: 70px;
        }

        #toggleBtn {
            background: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        #sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #333;
            padding: 12px 20px;
            border-radius: 8px;
            margin: 6px 6px;
            font-weight: 500;
            text-decoration: none;
            transition: background 0.3s, color 0.3s;
        }

        #sidebar .nav-link:hover,
        #sidebar .nav-link.active {
            background: #ffffff;

        }

        #sidebar.collapsed .nav-link {
            width: 50px;
        }

        #sidebar.collapsed .nav-link span {
            display: none;
        }

        #sidebar.collapsed .nav-link {
            justify-content: center;
        }

        .sidebar-bottom .logout-btn {
            width: 100%;
            background: none;
            border: none;
            text-align: left;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            color: #333;
            cursor: pointer;
            border-radius: 8px;
            transition: background 0.3s;
        }

        .sidebar-bottom .logout-btn:hover {
            background: #ffffff;
        }


        /* Main content */
        #content {
            margin-left: 250px;
            margin-top: 56px;
            padding: 20px;
            transition: 0.3s;
            background-color: white;
            min-height: calc(100vh - 56px);

        }

        #content.collapsed {
            margin-left: 70px;
        }

        .nav-Bg {
            background: #EEEEEE;
        }
    </style>

</head>

<body>



    <!-- NAVBAR -->
    <nav class="navbar navbar-light fixed-top px-5 nav-Bg">
        <h1 class="inline-block">
            Tech Guru
        </h1>
        <div class="d-flex align-items-center">
            <i class="ri-notification-3-line fs-5 me-4 text-black"></i>
            <i class="ri-account-box-fill fs-4"></i>
        </div>
    </nav>


    <!-- SIDEBAR -->
    <div id="sidebar">
        <!-- Toggle Button -->
        <div class="sidebar-top d-flex justify-content-end pe-3 mb-3">
            <button id="toggleBtn" class="btn btn-light">
                <i class="ri-logout-box-line"></i>
            </button>
        </div>

        <!-- Navigation Links -->
        <ul class="nav flex-column flex-grow-1">
            <li>
                <a href="/admin/dashboard" class="nav-link active">
                    <i class="ri-dashboard-line fs-4"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/blogs" class="nav-link">
                    <i class="ri-blogger-line fs-4"></i>
                    <span>Blog</span>
                </a>
            </li>
            <li>
                <form action="/admin/sitemap" method="POST">
                    @csrf
                    <button type="submit" class="nav-link">
                        <i class="ri-brush-ai-fill fs-4"></i>
                        <span>Generate Sitemap</span>
                    </button>
                </form>
            </li>
        </ul>

        <!-- Logout -->
        <div class="sidebar-bottom mt-auto pb-3">
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="nav-link logout-btn">
                    <i class="ri-logout-circle-line fs-4"></i>
                    <span>Logout</span>
                </button>
            </form>
        </div>
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