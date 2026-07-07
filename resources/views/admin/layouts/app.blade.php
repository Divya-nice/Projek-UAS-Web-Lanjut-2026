<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title','Admin GEMAKSARA')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

:root{
    --primary:#6F4E37;
    --secondary:#8B5E3C;
    --hover:#5C4033;
    --cream:#F8F5F1;
    --light:#FFFDFB;
    --border:#e8dfd8;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    background:var(--cream);
    font-family:'Poppins',sans-serif;
}

/* TOPBAR */

.topbar{
    height:75px;
    background:var(--primary);
    color:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 35px;
    box-shadow:0 5px 15px rgba(0,0,0,.12);
    position:sticky;
    top:0;
    z-index:999;
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
    font-size:24px;
    font-weight:700;
}

.logo img{
    width:55px;
    height:55px;
    object-fit:contain;
    border-radius:0;
    background:transparent;
    padding:0px;
}

.admin-info{
    display:flex;
    align-items:center;
    gap:20px;
    font-size:15px;
}

.logout-btn{
    text-decoration:none;
    color:white;
    background:#A47148;
    padding:10px 20px;
    border-radius:10px;
    font-weight:600;
    transition:.3s;
    border:none;
    cursor:pointer;
    font-family:'Poppins',sans-serif;
    font-size:15px;
}

.logout-btn:hover{
    background:#5C4033;
    color:white;
}

/* WRAPPER */

.wrapper{
    display:flex;
    min-height:calc(100vh - 75px);
}

/* SIDEBAR */

.sidebar{
    width:260px;
    background:white;
    border-right:1px solid var(--border);
    box-shadow:2px 0 10px rgba(0,0,0,.05);
}

.sidebar-title{
    padding:25px;
    font-size:13px;
    letter-spacing:2px;
    color:#999;
    font-weight:600;
}

.sidebar a{
    display:flex;
    align-items:center;
    gap:14px;
    color:#555;
    text-decoration:none;
    padding:15px 25px;
    font-weight:500;
    transition:.25s;
}

.sidebar a:hover{
    background:#f5ece5;
    color:var(--primary);
    padding-left:32px;
}

.sidebar a.active{
    background:linear-gradient(90deg,#6F4E37,#8B5E3C);
    color:white;
    border-radius:0 40px 40px 0;
    margin-right:15px;
}

.sidebar i{
    font-size:18px;
}

/* CONTENT */

.content{
    flex:1;
    padding:35px;
}

.page-title{
    font-size:33px;
    font-weight:700;
    margin-bottom:25px;
    color:#444;
}

/* CARD */

.card-custom{
    background:white;
    border:none;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(0,0,0,.06);
    overflow:hidden;
}

.card-header-custom{
    background:linear-gradient(90deg,#6F4E37,#8B5E3C);
    color:white;
    padding:18px 25px;
    font-size:20px;
    font-weight:600;
}

.card-body-custom{
    padding:25px;
}

/* BUTTON */

.btn-brown{
    background:#6F4E37;
    color:white;
    border:none;
    border-radius:10px;
    padding:10px 18px;
}

.btn-brown:hover{
    background:#5C4033;
    color:white;
}

.table thead{
    background:#f5f2ef;
}

.table th{
    font-weight:600;
}

footer{
    margin-top:40px;
    text-align:center;
    color:#777;
    font-size:14px;
}

/* ================= TABEL ================= */

.table{
    margin-bottom:0;
}

.table th,
.table td{
    vertical-align:middle;
    text-align:center;
    padding:15px;
}

.table th{
    background:#f5f2ef;
    font-weight:600;
}

.table td strong{
    color:#444;
}

.table .btn{
    border-radius:8px;
    font-size:13px;
    padding:6px 12px;
    min-width:90px;
}

.badge{
    font-size:13px;
    padding:8px 12px;
}

.form-control{
    border-radius:10px;
    height:45px;
}

.form-control:focus{
    border-color:#8B5E3C;
    box-shadow:0 0 0 .15rem rgba(111,78,55,.2);
}

.card-custom{
    border-radius:15px;
    overflow:hidden;
}

.card-header-custom{
    font-size:18px;
}

@media(max-width:768px){

.wrapper{
    flex-direction:column;
}

.sidebar{
    width:100%;
}

.content{
    padding:20px;
}

.page-title{
    font-size:26px;
}

.topbar{
    padding:0 15px;
}

.logo span{
    font-size:20px;
}

}

</style>

</head>

<body>

<div class="topbar">

    <div class="logo">

        <img src="{{ asset('images/books.png') }}" alt="Logo GEMAKSARA">

        <span>GEMAKSARA</span>

    </div>

    <div class="admin-info">

        <span>
            Halo, <strong>Admin</strong>
        </span>

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </button>
        </form>

    </div>

</div>

<div class="wrapper">

<div class="sidebar">

<div class="sidebar-title">

MENU ADMIN

</div>

<a href="{{ route('beranda') }}"
class="{{ request()->routeIs('beranda') ? 'active' : '' }}">

<i class="bi bi-house-door-fill"></i>

Beranda

</a>

<a href="{{ route('kegiatan.index') }}"
class="{{ request()->routeIs('kegiatan.*') ? 'active' : '' }}">

<i class="bi bi-calendar-event-fill"></i>

Kelola Kegiatan

</a>

<a href="{{ route('relawan.index') }}"
class="{{ request()->routeIs('relawan.*') ? 'active' : '' }}">

<i class="bi bi-people-fill"></i>

Verifikasi Relawan

</a>

</div>

<div class="content">

@yield('content')

<footer>

© 2026 GEMAKSARA • Sistem Informasi Relawan

</footer>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>

</html>