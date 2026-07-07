<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <title>Jadwal Saya</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-[#F7F2EB] pt-20 relative overflow-x-hidden">

<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-50
bg-gradient-to-r
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

    <a href="/relawan" class="hover:text-yellow-300 transition">
        Beranda Kegiatan
    </a>

    <a href="/relawan/jadwal" class="text-yellow-300">
        Jadwal Saya
    </a>

</div>

    <div class="flex items-center gap-6">

        <div class="flex items-center">
            <span class="font-medium">
                Halo, Relawan
            </span>
        </div>

        <form action="/logout" method="POST">
            @csrf

            <button
                type="submit"
                class="bg-white text-amber-900 px-4 py-2 rounded-xl font-semibold hover:bg-amber-100 transition">

                Logout

            </button>

        </form>

    </div>

</nav>







<!-- HERO -->

<section class="mx-10 mt-8">

<div class="bg-gradient-to-r

from-[#5B1E08]
via-[#A3470A]
to-[#D97706]

rounded-[32px]

shadow-xl

px-12
py-6

text-white

flex
items-center
justify-between">


<!-- kiri -->

<div class="max-w-2xl">


<h1 class="text-3xl font-bold leading-tight">

Jadwal Kegiatan Saya

</h1>



<p class="mt-5 text-lg text-amber-100">

Pantau status pendaftaran kegiatan yang telah Anda ikuti
sebagai relawan GemaAksara. Seluruh informasi verifikasi
dan hasil seleksi dapat dilihat pada halaman ini.

</p>



</div>




<!-- kanan -->

<img src="{{ asset('images/1.png') }}"

class="w-80">




</div>

</section>







<!-- ================= JUDUL ================= -->

<section class="max-w-6xl mx-auto mt-12">

<h2 class="text-3xl

font-bold

text-amber-900">

Riwayat Pendaftaran

</h2>

<p class="text-gray-600 mt-2">

Berikut merupakan daftar kegiatan yang pernah Anda daftar sebagai relawan.

</p>

</section>

<!-- ================= CARD 1 ================= -->

<div class="max-w-6xl mx-auto mt-8 space-y-6">

    <div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl duration-300 overflow-hidden">

        <div class="flex flex-col md:flex-row">

            <!-- Gambar -->

            <img src="{{ asset('images/Gema aksara gambar.png') }}"

            class="md:w-72 w-full h-56 object-cover">




            <!-- Isi -->

            <div class="flex-1 p-7">

                <div class="flex justify-between items-start flex-wrap gap-4">

                    <div>

                        <h3 class="text-2xl font-bold text-amber-900">

                            Petualangan Membaca Bersama

                        </h3>

                        <p class="mt-2 text-gray-500">

                            📅 25 Juli 2026

                        </p>

                        <p class="text-gray-500">

                            🕘 09.00 WIB

                        </p>

                        <p class="text-gray-500">

                            📍 Aula Perpustakaan Daerah

                        </p>

                    </div>

                    <span class="bg-amber-100 text-amber-800 px-4 py-2 rounded-full font-semibold">

                        Menunggu Verifikasi

                    </span>

                </div>

                <p class="mt-5 text-gray-600">

                    Data pendaftaran Anda sedang diperiksa oleh Admin.
                    Mohon menunggu proses verifikasi.

                </p>

            </div>

        </div>

    </div>






<!-- ================= CARD 2 ================= -->

<div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl duration-300 overflow-hidden">

    <div class="flex flex-col md:flex-row items-stretch">
<img
    src="{{ asset('images/Dongeng cerita.png') }}"
    class="md:w-72 w-full object-cover self-strectch">




        <div class="flex-1 p-7">

            <div class="flex justify-between items-start flex-wrap gap-4">

                <div>

                    <h3 class="text-2xl font-bold text-amber-900">
    Dongeng Ceria Bersama Anak-anak
</h3>

<p class="mt-2 text-gray-500">
    📅 02 Agustus 2026
</p>

<p class="text-gray-500">
    🕘 08.30 WIB
</p>

<p class="text-gray-500">
    📍 Taman Alun Kapuas
</p>

                </div>

                <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full font-semibold">

                    Diterima

                </span>

            </div>

            <p class="mt-5 text-gray-600">
    Selamat! Anda telah lolos seleksi sebagai relawan. Silakan hadir sesuai jadwal dan lokasi yang telah ditentukan.
</p>


        </div>

    </div>

</div>







<!-- ================= CARD 3 ================= -->

<div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl duration-300 overflow-hidden">

    <div class="flex flex-col md:flex-row items-stretch">

       <img src="{{ asset('images/Kelas kreatif.png') }}"

        class="md:w-72 w-full object-cover self-strectch ">




        <div class="flex-1 p-7">

            <div class="flex justify-between items-start flex-wrap gap-4">

                <div>

                    <h3 class="text-2xl font-bold text-amber-900">
    Kelas Kreatif Literasi
</h3>

<p class="mt-2 text-gray-500">
    📅 10 Agustus 2026
</p>

<p class="text-gray-500">
    🕘 13.00 WIB
</p>

<p class="text-gray-500">
    📍 SD Negeri 14 Pontianak
</p>

                </div>

                <span class="bg-red-100 text-red-700 px-4 py-2 rounded-full font-semibold">

                    Ditolak

                </span>

            </div>

            <p class="mt-5 text-gray-600">
    Mohon maaf, pendaftaran Anda belum dapat diterima karena kuota relawan telah terpenuhi. Terima kasih atas antusiasme Anda.
</p>
        </div>

    </div>

</div>

</div>






<!-- ================= FOOTER SPACE ================= -->

<div class="h-10"></div>

</body>

</html>