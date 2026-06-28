<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Beranda Relawan</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F7F2EB] pt-20 relative overflow-x-hidden">
    



<!-- NAVBAR -->

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





<div class="flex items-center gap-3">

Halo, Relawan

<div class="w-8 h-8

rounded-full

bg-amber-700

flex

justify-center

items-center">

👤

</div>

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

Jadilah Bagian dari

Gerakan Literasi Pontianak

</h1>



<p class="mt-5 text-lg text-amber-100">

Temukan kegiatan membaca,

mendongeng dan edukasi anak

bersama relawan GemaAksara.

</p>



<a href="#kegiatan"

class="mt-7

inline-flex

items-center

gap-3

bg-white

text-amber-900

font-semibold

px-6

py-3

rounded-xl

hover:bg-amber-50

duration-300">




Jelajahi Kegiatan


</a>


</div>




<!-- kanan -->

<img src="{{ asset('images/1.png') }}"

class="w-80">




</div>

</section>















<!-- TENTANG GEMAAKSARA -->

<section class="max-w-6xl mx-auto py-14">


<h2 class="text-4xl

font-bold

text-center

text-amber-950">


Tentang GemaAksara


</h2>



<p class="text-center

text-gray-600

mt-3">


Mari berkontribusi membangun budaya membaca

bagi anak-anak Pontianak.


</p>





<div class="grid md:grid-cols-3 gap-8 mt-12">



<!-- card 1 -->

<div class="bg-white

rounded-3xl

shadow-lg

p-7

hover:-translate-y-2

duration-300">


<img src="{{ asset('images/2.png') }}"

class="w-30 mb-5">


<h3 class="text-2xl

font-bold

text-amber-950">


Kegiatan Literasi


</h3>


<p class="mt-3

text-gray-600">


Membaca bersama,

mendongeng,

dan pojok baca

untuk anak-anak.


</p>


</div>






<!-- card 2 -->

<div class="bg-white

rounded-3xl

shadow-lg

p-7

hover:-translate-y-2

duration-300">


<img src="{{ asset('images/3.png') }}"

class="w-30 mb-5">


<h3 class="text-2xl

font-bold

text-amber-950">


Relawan Aktif


</h3>


<p class="mt-3

text-gray-600">


Pantau jadwal kegiatan

dan berkontribusi

bersama komunitas.


</p>


</div>







<!-- card 3 -->

<div class="bg-white

rounded-3xl

shadow-lg

p-7

hover:-translate-y-2

duration-300">


<img src="{{ asset('images/4.png') }}"

class="w-30 mb-5">


<h3 class="text-2xl

font-bold

text-amber-950">


Dampak Nyata


</h3>


<p class="mt-3

text-gray-600">


Menciptakan pengalaman

belajar yang menyenangkan

bagi anak-anak.


</p>


</div>




</div>

</section>








<!-- DAFTAR KEGIATAN -->


<section id="kegiatan"

class="mx-10 mb-16">



<h2 class="text-3xl font-bold text-amber-900 mb-8">


Daftar Kegiatan


</h2>






<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">






<div class="bg-white rounded-3xl shadow-lg hover:shadow-2xl duration-300 overflow-hidden">






<img src="{{ asset('images/Gema aksara gambar.png') }}"

class="w-full h-56 object-cover">






<div class="p-6">





<span class="bg-green-100

text-green-700

px-3

py-1

rounded-full

text-sm">


Pendaftaran Dibuka


</span>





<p class="mt-4 text-gray-500">


📅 25 Mei 2026


</p>





<p class="text-gray-500">


🕘 09.00 WIB


</p>







<h3 class="text-2xl font-bold mt-3 text-amber-900">


Petualangan Membaca Bersama


</h3>






<p class="text-gray-600 mt-3">


📍 Aula Perpustakaan Daerah


</p>







<a href="/relawan/detail"

class="mt-5 block w-full

bg-gradient-to-r

from-[#6B240C]

via-[#B45309]

to-[#D97706]

text-white

py-3

rounded-xl

font-semibold

text-center

hover:scale-105

duration-300">


Lihat Detail & Daftar


</a>



</div>



</div>




</div>



</section>



</body>
</html>