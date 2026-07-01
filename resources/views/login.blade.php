<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

    <h1>Halaman Login</h1>

    <a href="{{ route('register') }}">
        Kembali ke Register
    </a>

</body>
</html>
@extends('layouts.app')

@section('title', 'Login - GemaAksara')

@section('content')

<div class="min-h-screen flex items-center justify-center px-4 bg-gradient-to-br from-amber-50 to-stone-100">

    <div class="bg-white rounded-3xl shadow-xl w-full max-w-md p-8">

<div class="text-center mb-8">

    <div class="flex justify-center mb-4">
        <img
            src="{{ asset('images/buku.png.png') }}"
            alt="Logo Buku"
            class="w-24 h-24 object-contain">
    </div>

            <h1 class="text-4xl font-black text-stone-800">
                GemaAksara
            </h1>

            <p class="text-stone-500 mt-2">
                Masuk sebagai relawan literasi
            </p>

        </div>

        <form action="/login" method="POST">

            @csrf

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2 text-stone-700">
                    Email
                </label>

                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3">
            </div>

            <div class="mb-6">
                <label class="block text-sm font-semibold mb-2 text-stone-700">
                    Password
                </label>

                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3">
            </div>

            <button
                type="submit"
                class="w-full bg-amber-700 hover:bg-amber-800 text-white py-3 rounded-xl font-bold transition">
                Masuk
            </button>

        </form>

        <div class="mt-5 text-center">
            <p class="text-sm text-stone-500">
                Belum memiliki akun?
                <a href="/register" class="text-amber-700 font-semibold hover:underline">
                    Daftar sekarang
                </a>
            </p>
        </div>

        <div class="mt-8 text-center border-t pt-4">
            <p class="text-xs italic text-stone-400">
                "Membaca hari ini, memimpin masa depan."
            </p>
        </div>

    </div>

</div>

@endsection
