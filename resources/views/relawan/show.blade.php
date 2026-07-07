<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Detail Kegiatan</title>

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

<img src="{{ asset('images/buku.png') }}"

class="w-8">

<h1 class="font-bold text-2xl">

GemaAksara

</h1>

</div>





<div class="flex gap-14 font-medium">

<a href="/relawan"

class="hover:text-yellow-300">

Beranda Kegiatan

</a>



<a href="">

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





<div class="max-w-6xl mx-auto pt-3 pb-10">





<div class="bg-white

rounded-[30px]

shadow-xl

border

border-amber-100

p-7

mt-3

max-w-3xl

mx-auto">





<img src="{{ asset('images/Gema aksara gambar.png') }}"

class="w-full h-81 object-cover rounded-2xl">





<div class="p-8">





<div class="flex items-center justify-between flex-wrap gap-3">



<div class="inline-flex items-center gap-2
bg-amber-100
text-amber-800
px-4 py-2
rounded-full
text-sm
font-semibold">

    <div class="w-5 h-5 flex items-center justify-center overflow-visible">
        <img src="{{ asset('images/5.png') }}"
             class="w-5 h-5 object-contain scale-[2.8]">
    </div>

    <span>Literasi Anak</span>

</div>





<span class="inline-flex

items-center

gap-2

bg-green-100

text-green-700

px-4

py-2

rounded-full

text-sm

font-semibold">

<span class="w-3 h-3 rounded-full bg-green-500"></span>

Pendaftaran Dibuka

</span>



</div>






<h1 class="text-4xl

font-bold

text-amber-900

mt-6

leading-tight">

Petualangan Membaca Bersama

</h1>






<p class="mt-5

text-gray-600

leading-8">

Petualangan Membaca Bersama merupakan kegiatan literasi interaktif yang mengajak anak-anak menjelajahi dunia cerita melalui sesi membaca nyaring, permainan edukatif, dan diskusi ringan bersama relawan GemaAksara.

</p>







<div class="grid md:grid-cols-2 gap-5 mt-8">




<div class="bg-white

rounded-2xl

shadow-md

border

border-amber-100

p-5

hover:shadow-lg

duration-300">

📅 <b>Tanggal</b>

<p class="mt-2">

25 Juli 2026

</p>

</div>






<div class="bg-white

rounded-2xl

shadow-md

border

border-amber-100

p-5

hover:shadow-lg

duration-300">

🕘 <b>Waktu</b>

<p class="mt-2">

09.00 WIB

</p>

</div>






<div class="bg-white

rounded-2xl

shadow-md

border

border-amber-100

p-5

hover:shadow-lg

duration-300">

📍 <b>Lokasi</b>

<p class="mt-2">

Aula Perpustakaan Daerah

</p>

</div>







<div class="bg-white

rounded-2xl

shadow-md

border

border-amber-100

p-5

hover:shadow-lg

duration-300">

👥 <b>Kuota Relawan</b>

<p class="mt-2">

15 Orang

</p>

</div>

</div>

</div>

</div>


<!-- Form -->

<div class="bg-white

rounded-[30px]

shadow-xl

border

border-amber-100

p-8

mt-8

max-w-3xl

mx-auto">



<h2 class="text-3xl

font-bold

text-amber-900

mb-8">

Formulir Pendaftaran Relawan

</h2>





<form>





<label class="font-semibold">

Nama Lengkap

</label>

<input

type="text"

placeholder="Masukkan nama lengkap"

class="w-full

border

border-amber-200

rounded-xl

p-3

mt-2

mb-5

focus:outline-none

focus:ring-2

focus:ring-amber-400">







<label class="font-semibold">

Jenis Kelamin

</label>



<div class="mt-3 mb-5 flex gap-8">

<label class="flex items-center gap-2">

<input type="radio">

Laki-laki

</label>



<label class="flex items-center gap-2">

<input type="radio">

Perempuan

</label>

</div>








<label class="font-semibold">

No Telepon / WA

</label>

<input

type="text"

placeholder="08xxxxxxxxxx"

class="w-full

border

border-amber-200

rounded-xl

p-3

mt-2

mb-5

focus:outline-none

focus:ring-2

focus:ring-amber-400">








<label class="font-semibold">

Alamat Rumah

</label>

<textarea

rows="3"

placeholder="Masukkan alamat lengkap"

class="w-full

border

border-amber-200

rounded-xl

p-3

mt-2

mb-5

focus:outline-none

focus:ring-2

focus:ring-amber-400"></textarea>









<label class="font-semibold">

Alasan Mengikuti

</label>

<textarea

rows="4"

placeholder="Ceritakan alasan Anda mengikuti kegiatan ini"

class="w-full

border

border-amber-200

rounded-xl

p-3

mt-2

mb-6

focus:outline-none

focus:ring-2

focus:ring-amber-400"></textarea>








<a href="/relawan/sukses">

<button

type="button"

class="bg-gradient-to-r

from-[#6B240C]

via-[#B45309]

to-[#D97706]

text-white

px-8

py-3

rounded-xl

font-semibold

shadow-lg

hover:scale-105

duration-300">

Ajukan Pendaftaran Sebagai Relawan

</button>

</a>





</form>

</div>

</body>

</html>