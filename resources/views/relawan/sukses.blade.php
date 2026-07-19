<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Berhasil</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F7F2EB] min-h-screen relative">
    <!-- ORNAMEN -->

    <div class="absolute -top-20 -left-20 w-80 h-80 bg-amber-300/30 rounded-full blur-[120px]"></div>

    <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-300/25 rounded-full blur-[140px]"></div>

    <div class="absolute top-48 right-56 w-40 h-40 bg-yellow-200/30 rounded-full blur-[100px]"></div>

    <!-- NAVBAR -->

    <nav class="bg-gradient-to-r
        from-amber-950
        via-amber-900
        to-yellow-800
        text-white
        px-12
        py-4
        flex
        justify-between
        items-center
        shadow-lg">

        <div class="flex items-center gap-3">

            <img src="{{ asset('images/buku.png') }}" class="w-8">

            <h1 class="font-bold text-2xl">

                GemaAksara

            </h1>

        </div>

        <div class="flex gap-14 font-medium">

            <a href="{{ route('relawan.beranda') }}"
                class="hover:text-yellow-300 transition">

                Beranda Kegiatan

            </a>

            <a href="{{ route('relawan.jadwal') }}"
                class="hover:text-yellow-300 transition">

                Jadwal Saya

            </a>

        </div>

        <div class="flex items-center gap-6">

            <span class="font-medium">

                Halo, {{ Auth::user()->name }}

            </span>

            <form action="{{ route('logout') }}" method="POST">

                @csrf

                <button
                    type="submit"
                    class="bg-white text-amber-900 px-4 py-2 rounded-xl font-semibold hover:bg-amber-100 transition">

                    Logout

                </button>

            </form>

        </div>

    </nav>

    <!-- CONTENT -->

    <section class="relative flex justify-center items-center py-10">

        <div class="absolute top-24 left-10 w-[220px] h-[220px] rounded-full bg-amber-200 opacity-70 blur-[30px]"></div>

        <div class="absolute bottom-10 right-10 w-[260px] h-[260px] rounded-full bg-orange-200 opacity-70 blur-[30px]"></div>

        <div class="absolute left-40 top-[420px] w-16 h-16 rounded-full bg-yellow-200/70 blur-3xl"></div>

        <div class="bg-white
            w-[460px]
            rounded-[30px]
            shadow-[0_15px_40px_rgba(120,80,30,0.12)]
            z-10
            text-center
            px-8
            py-10">

            <!-- ICON -->

            <div class="w-20 h-20 mx-auto rounded-full bg-green-50 shadow-lg flex items-center justify-center">

                <div class="w-14 h-14 rounded-full bg-green-600 flex items-center justify-center">

                    <span class="text-4xl text-white">

                        ✓

                    </span>

                </div>

            </div>

            <h1 class="mt-6 text-3xl font-bold text-amber-950">

                Pendaftaran Berhasil Dikirim!

            </h1>

            <div class="flex justify-center items-center gap-3 mt-5">

                <div class="w-14 h-[2px] bg-amber-400"></div>

                <div class="w-3 h-3 rounded-full bg-amber-400"></div>

                <div class="w-14 h-[2px] bg-amber-400"></div>

            </div>

            <p class="mt-5 text-gray-700">

                Terima kasih telah mendaftar sebagai relawan di

                <b>GemaAksara</b>

            </p>

            <p class="mt-3 text-gray-600">

                Data formulir Anda telah berhasil dikirim dan sedang diperiksa oleh Admin.

            </p>

            <p class="mt-4 text-gray-600 leading-7">

                Anda dapat memantau hasil verifikasi kapan saja melalui halaman

                <b>Jadwal Saya</b>.

            </p>

                        <!-- Tombol -->

            <div class="mt-8 flex flex-col gap-4">

                <a
                    href="{{ route('relawan.jadwal') }}"
                    class="bg-gradient-to-r
                    from-[#6B240C]
                    via-[#B45309]
                    to-[#7C2D12]
                    text-white
                    py-3
                    rounded-xl
                    font-semibold
                    shadow-lg
                    hover:scale-105
                    transition
                    duration-300">

                    📅 Cek Jadwal Saya

                </a>

                <a
                    href="{{ route('relawan.beranda') }}"
                    class="border-2
                    border-amber-700
                    text-amber-800
                    py-3
                    rounded-xl
                    font-semibold
                    hover:bg-amber-50
                    transition
                    duration-300">

                    ← Kembali ke Beranda

                </a>

            </div>

        </div>

    </section>

    <div class="h-10"></div>

</body>

</html>