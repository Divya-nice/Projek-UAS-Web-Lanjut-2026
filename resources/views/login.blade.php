<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GEMAKSARA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root{
            --brown:#8B5E3C;
            --brown-dark:#5C4033;
            --cream:#F8F1E5;
        }

        body{
            background:var(--cream);
            font-family:'Segoe UI',sans-serif;
        }

        .login-card{
            border:none;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 15px 35px rgba(0,0,0,.12);
        }

        .left-side{
            background:white;
            padding:50px;
        }

        .right-side{
            background:linear-gradient(135deg,#8B5E3C,#5C4033);
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            flex-direction:column;
            padding:40px;
        }

        .logo{
            width:90px;
            margin-bottom:15px;
        }

        .form-control{
            border-radius:10px;
            padding:12px;
        }

        .btn-login{
            background:#8B5E3C;
            color:white;
            border:none;
            border-radius:10px;
            padding:12px;
            font-weight:bold;
        }

        .btn-login:hover{
            background:#5C4033;
            color:white;
        }

        a{
            color:#8B5E3C;
            text-decoration:none;
        }

        a:hover{
            text-decoration:underline;
        }
    </style>

</head>
<body>

<div class="container py-5">

<div class="row justify-content-center">

<div class="col-lg-10">

<div class="card login-card">

<div class="row g-0">

<div class="col-md-6 left-side">

<h2 class="fw-bold mb-2">
Login Admin
</h2>

<p class="text-muted mb-4">
Silakan masuk ke akun GEMAKSARA Anda.
</p>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="{{ route('login.process') }}">

@csrf

<div class="mb-3">

<label class="form-label">
Email
</label>

<input
type="email"
name="email"
class="form-control @error('email') is-invalid @enderror"
value="{{ old('email') }}"
required>

@error('email')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror

</div>

<div class="mb-4">

<label class="form-label">
Password
</label>

<input
type="password"
name="password"
class="form-control @error('password') is-invalid @enderror"
required>

@error('password')
<div class="invalid-feedback">
{{ $message }}
</div>
@enderror

</div>

<div class="d-grid">

<button class="btn btn-login">

<i class="bi bi-box-arrow-in-right"></i>

Login

</button>

</div>

</form>

<div class="text-center mt-4">

Belum punya akun?

<a href="{{ route('register') }}">

Daftar sekarang

</a>

</div>

</div>

<div class="col-md-6 right-side">
<img
src="{{ asset('images/books.jpeg') }}"
alt="Logo GEMAKSARA"
class="img-fluid mb-4"
style="width:220px;height:220px;object-fit:contain;">

<h2 class="fw-bold">
GEMAKSARA
</h2>

<p class="text-center mt-3">

Gerakan Membaca Bersama Masyarakat

</p>

</div>

</div>

</div>

</div>

</div>

</div>

</body>
</html>