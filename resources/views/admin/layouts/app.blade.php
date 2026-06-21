<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gemaksara</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --brown-dark: #5C4033;
            --brown: #8B5E3C;
            --brown-light: #A47148;
            --cream: #F8F1E5;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--cream);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* TOPBAR */
        .topbar {
            background-color: var(--brown-dark);
            color: white;
            height: 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
        }

        .admin-name {
            font-size: 18px;
        }

        /* LAYOUT */
        .wrapper {
            display: flex;
            min-height: calc(100vh - 80px);
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            background-color: var(--brown);
        }

        .sidebar-menu {
            padding-top: 15px;
        }

        .sidebar-menu a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 16px 22px;
            font-size: 18px;
            transition: 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: var(--brown-dark);
        }

        .sidebar-menu a.active {
            background-color: var(--brown-dark);
            border-left: 5px solid #f8d49d;
        }

        /* CONTENT */
        .content {
            flex: 1;
            padding: 30px;
        }

        .page-title {
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 25px;
            color: #1f2937;
        }

        /* CARD */
        .card-custom {
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }

        .card-header-custom {
            background-color: #1f2937;
            color: white;
            padding: 15px 20px;
            font-size: 22px;
        }

        .card-body-custom {
            padding: 20px;
        }

        /* TABLE */
        table {
            width: 100%;
        }

        .table th {
            background-color: #f1f1f1;
        }

        /* BUTTON */
        .btn-brown {
            background-color: var(--brown);
            color: white;
            border: none;
        }

        .btn-brown:hover {
            background-color: var(--brown-dark);
            color: white;
        }
    </style>
</head>

<body>

    <!-- TOPBAR -->
    <div class="topbar">
        <div class="logo">
            📚 GEMAKSARA
        </div>

        <div class="admin-name">
            Admin
        </div>
    </div>

    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- SIDEBAR -->
        <div class="sidebar">
            <div class="sidebar-menu">

                <a href="{{ route('beranda') }}"
                   class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
                    🏠 Beranda
                </a>

                <a href="{{ route('kegiatan.index') }}"
                   class="{{ request()->routeIs('kegiatan.*') ? 'active' : '' }}">
                    📅 Kelola Kegiatan
                </a>

                <a href="{{ route('relawan.index') }}"
                   class="{{ request()->routeIs('relawan.*') ? 'active' : '' }}">
                    👥 Verifikasi Relawan
                </a>

            </div>
        </div>

        <!-- CONTENT -->
        <div class="content">
            @yield('content')
        </div>

    </div>

</body>
</html>