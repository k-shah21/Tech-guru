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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0B192C;
            --main-yellow: #edc458;
            --card-bg: #1D253F;
            --sidebar-bg: #142258;
            --border-color: rgba(255, 255, 255, 0.1);
        }

        body {
            background: var(--bg-dark);
            color: #ffffff;
            font-family: 'Space Grotesk', sans-serif;
            overflow-x: hidden;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Marcellus', serif;
        }

        .navbar {
            background: var(--sidebar-bg);
            border-bottom: 1px solid var(--border-color);
            padding: 1rem 3rem;
        }

        .navbar-brand {
            color: var(--main-yellow) !important;
            font-family: 'Marcellus', serif;
            font-size: 1.5rem;
            font-weight: bold;
        }

        #sidebar {
            position: fixed;
            top: 72px;
            left: 0;
            min-height: calc(100vh - 72px);
            width: 250px;
            background: var(--sidebar-bg);
            border-right: 1px solid var(--border-color);
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        #sidebar.collapsed {
            width: 80px;
        }

        #sidebar .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            color: rgba(255, 255, 255, 0.7);
            padding: 12px 24px;
            margin: 4px 12px;
            border-radius: 12px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        #sidebar .nav-link:hover {
            color: var(--main-yellow);
            background: rgba(255, 255, 255, 0.05);
        }

        #sidebar .nav-link.active {
            background: var(--main-yellow);
            color: #000000;
        }

        #sidebar.collapsed .nav-link {
            padding: 12px;
            justify-content: center;
            margin: 4px 15px;
        }

        #sidebar.collapsed .nav-link span {
            display: none;
        }

        #content {
            margin-left: 250px;
            margin-top: 72px;
            padding: 40px;
            transition: all 0.3s ease;
            min-height: calc(100vh - 72px);
        }

        #content.collapsed {
            margin-left: 80px;
        }

        .card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            color: #ffffff;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .stats-icon {
            width: 54px;
            height: 54px;
            background: rgba(237, 196, 88, 0.1);
            color: var(--main-yellow);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .card:hover .stats-icon {
            transform: scale(1.05);
            background: rgba(237, 196, 88, 0.2);
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--border-color);
            color: #ffffff;
            border-radius: 12px;
            padding: 12px 16px;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.08);
            border-color: var(--main-yellow);
            color: #ffffff;
            box-shadow: none;
        }

        .btn-gradient {
            background: linear-gradient(90deg, #6065d4, #fa5674);
            border: none;
            color: white;
            padding: 12px 30px;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-gradient:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            color: white;
        }

        #toggleBtn {
            background: rgba(255, 255, 255, 0.05);
            border: none;
            color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .table {
            --bs-table-bg: transparent !important;
            --bs-table-color: #ffffff !important;
            --bs-table-hover-bg: rgba(255, 255, 255, 0.05) !important;
            --bs-table-hover-color: #ffffff !important;
            --bs-table-border-color: rgba(255, 255, 255, 0.1) !important;
            background-color: transparent !important;
            color: #ffffff !important;
            margin-bottom: 0;
        }

        .table th {
            border-bottom: 2px solid var(--border-color) !important;
            color: var(--main-yellow) !important;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .table td {
            border-bottom: 1px solid rgba(255, 255, 255, 0.05) !important;
            vertical-align: middle;
        }

        .table-responsive {
            background: transparent !important;
        }

        /* Unified Tabs */
        .tab {
            color: rgba(255, 255, 255, 0.6);
            font-weight: 600;
            padding: 10px 0;
            position: relative;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none !important;
        }

        .tab:hover {
            color: rgba(255, 255, 255, 0.9);
        }

        .tab.active {
            color: var(--main-yellow);
        }

        .tab.active::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--main-yellow);
            box-shadow: 0 0 10px rgba(237, 196, 88, 0.4);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.4s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Unified Badges */
        .badge-tag {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 0.75rem;
            display: inline-block;
        }

        .preview-thumb {
            width: 80px;
            height: 54px;
            object-fit: cover;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(0,0,0,0.2);
        }

        .btn-action {
            width: 32px;
            height: 32px;
            display: inline-flex !important;
            align-items: center;
            justify-content: center;
            padding: 0 !important;
            border-radius: 8px !important;
            transition: all 0.2s ease;
            border: 1px solid transparent;
            background: transparent;
        }

        .btn-action-edit {
            color: #ffffff !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        .btn-action-edit:hover {
            background: rgba(255, 255, 255, 0.1) !important;
            border-color: #ffffff !important;
        }

        .btn-action-delete {
            color: #ff4d4d !important;
            border-color: rgba(255, 77, 77, 0.1) !important;
        }

        .btn-action-delete:hover {
            background: rgba(255, 77, 77, 0.1) !important;
            border-color: #ff4d4d !important;
        }

        .btn-action i {
            font-size: 1.1rem;
            line-height: 1;
        }

        /* Dark Jodit Editor */
        .jodit-container {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid var(--border-color) !important;
            border-radius: 12px !important;
            color: #ffffff !important;
            overflow: hidden !important;
        }

        .jodit-workplace {
            background: transparent !important;
            color: #ffffff !important;
        }

        .jodit-wysiwyg {
            background: transparent !important;
            color: #ffffff !important;
            padding: 20px !important;
        }

        .jodit-toolbar__box {
            background: rgba(255, 255, 255, 0.03) !important;
            border-bottom: 1px solid var(--border-color) !important;
        }

        .jodit-toolbar-button__button {
            color: rgba(255, 255, 255, 0.7) !important;
        }

        .jodit-toolbar-button__button:hover {
            background: rgba(255, 255, 255, 0.1) !important;
            color: var(--main-yellow) !important;
        }

        .jodit-status-bar {
            background: rgba(255, 255, 255, 0.03) !important;
            border-top: 1px solid var(--border-color) !important;
            color: rgba(255, 255, 255, 0.5) !important;
        }

        .jodit-icon {
            fill: currentColor !important;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center gap-3">
                <button id="toggleBtn">
                    <i class="ri-menu-line"></i>
                </button>
                <a class="navbar-brand m-0" href="/admin/dashboard">Tech Guru Admin</a>
            </div>
            <div class="d-flex align-items-center gap-4">
                <div class="d-flex align-items-center gap-2">
                    <span class="text-white-50 small">Admin Dashboard</span>
                    <div class="rounded-circle bg-warning p-1" style="width: 32px; height: 32px; display: flex; align-items: center; justify-content: center;">
                        <i class="ri-user-settings-fill text-dark"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <!-- SIDEBAR -->
    <div id="sidebar">
        <!-- Navigation Links -->
        <ul class="nav flex-column flex-grow-1 mt-3">
            <li>
                <a href="/admin/dashboard" class="nav-link">
                    <i class="ri-dashboard-line fs-5"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin/blogs" class="nav-link">
                    <i class="ri-blogger-line fs-5"></i>
                    <span>Manage Blogs</span>
                </a>
            </li>
            <li>
                <form action="/admin/sitemap" method="POST">
                    @csrf
                    <button type="submit" class="nav-link w-[calc(100%-24px)] border-0 text-start bg-transparent">
                        <i class="ri-radar-line fs-5"></i>
                        <span>Generate Sitemap</span>
                    </button>
                </form>
            </li>
        </ul>

        <!-- Logout -->
        <div class="sidebar-bottom mt-auto pb-4">
            <form method="POST" action="/logout">
                @csrf
                <button type="submit" class="nav-link border-0 text-start bg-transparent w-[calc(100%-24px)]">
                    <i class="ri-logout-circle-line fs-5"></i>
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
            theme: 'dark',
            buttons: ['bold', 'italic', 'underline', '|', 'ul', 'ol']
        });
    </script>

</body>

</html>