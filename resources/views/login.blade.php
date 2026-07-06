@extends('layouts.app')

@section('title','Login - GemaAksara')

@section('content')

<div class="h-screen bg-gradient-to-br from-[#FFF9F0] via-[#FFF6E8] to-[#F7EFE5] flex items-center justify-center overflow-hidden px-6">

    <div class="w-full max-w-[860px] h-[520px] bg-white rounded-[30px] shadow-2xl overflow-hidden grid grid-cols-[45%_55%]">

        <!-- ================= PANEL KIRI ================= -->

        <div class="bg-gradient-to-br from-[#F8E7C8] to-[#F4D8A8] p-6 flex flex-col">

            <!-- Logo -->

            <div class="flex items-center gap-2">

                <img
                    src="{{ asset('images/buku.png.png') }}"
                    class="w-7 h-7 object-contain">

                <h2 class="text-[20px] font-bold text-[#5B220B]">
                    GemaAksara
                </h2>

            </div>

            <!-- Heading -->

            <div class="mt-6">

                <h1 class="font-black text-[32px] leading-[36px] text-[#3D2314]">

                    Membaca hari ini,

                    <span class="block text-[#C76713]">
                        memimpin
                    </span>

                    <span class="block text-[#C76713]">
                        masa depan.
                    </span>

                </h1>

                <div class="w-14 h-1 bg-[#D97706] rounded-full mt-4"></div>

                <p class="mt-5 text-[15px] leading-7 text-[#5A4638]">

                    Bergabunglah sebagai relawan literasi dan
                    wujudkan generasi yang gemar membaca
                    bersama GemaAksara.

                </p>

            </div>

            <!-- Gambar -->

            <div class="mt-4 pd-5">

                <img
                    src="{{ asset('images/ilustrasi buku.png') }}"
                    class="w-full h-[180px] object-cover rounded-[26px] shadow-lg">

            </div>

        </div>


 <!-- ================= PANEL KANAN ================= -->

<div class="bg-white px-8 pt-3 pb-5 flex flex-col">
    <!-- Logo -->

    <div class="text-center">

        <img
            src="{{ asset('images/buku.png.png') }}"
            class="w-11 h-11 mx-auto object-contain">

        <h2 class="mt-2 text-[34px] font-black text-[#3A241B]">
            GemaAksara
        </h2>

        <p class="mt-1 text-[15px] text-stone-500">
            Masuk sebagai relawan literasi
        </p>

    </div>

    <form action="/login" method="POST" class="mt-5">

        @csrf

        <!-- Email -->

        <div>

            <label class="block text-[15px] font-semibold text-stone-700 mb-2">
                Email
            </label>

            <div class="flex items-center border border-stone-300 rounded-xl overflow-hidden">

                
                <input
                    type="email"
                    name="email"
                    placeholder="Masukkan email"
                    class="flex-1 px-4 py-3 outline-none text-[15px]">

            </div>

        </div>

        <!-- Password -->

        <div class="mt-4">

            <label class="block text-[15px] font-semibold text-stone-700 mb-2">
                Password
            </label>

            <div class="flex items-center border border-stone-300 rounded-xl overflow-hidden">

               
                <input
                    type="password"
                    name="password"
                    placeholder="Masukkan password"
                    class="flex-1 px-4 py-3 outline-none text-[15px]">

            </div>

        </div>

        <!-- Opsi -->

        <div class="flex justify-between items-center mt-4 text-[14px]">

            <label class="flex items-center gap-2 text-stone-600">

                <input type="checkbox" class="rounded">

                Ingat saya

            </label>

            <a href="#" class="text-[#C56614] hover:underline">

                Lupa password?

            </a>

        </div>

        <!-- Tombol -->

        <button
            type="submit"
            class="mt-5 w-full h-12 rounded-xl font-bold text-white text-lg bg-gradient-to-r from-[#6B240C] via-[#A3470A] to-[#D97706] shadow-lg hover:opacity-95">

            Masuk

        </button>

    </form>

    <!-- Register -->

    <div class="flex items-center mt-3 mb-2">

        <div class="flex-1 border-t border-stone-300"></div>

        <span class="px-3 text-[13px] text-stone-400">

            Belum memiliki akun?

        </span>

        <div class="flex-1 border-t border-stone-300"></div>

    </div>

    <a
    href="/register"
    class="block w-full text-center py-1 rounded-xl border-1 border-[#D97706] text-[#C56614] font-bold hover:bg-amber-50 transition">

    Daftar Sekarang

</a>

</div>
</div>

</div>

@endsection
