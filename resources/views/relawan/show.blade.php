<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Detail Kegiatan</title>

<script src="https://cdn.tailwindcss.com"></script>

</head>



<body class="bg-stone-100">



<!-- Navbar -->

<nav class="bg-amber-900 text-white px-12 py-5 flex justify-between items-center shadow-md">




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

<a href="/relawan/jadwal"
class="hover:text-yellow-300">
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



</nav>





<div class="max-w-6xl mx-auto py-10">



<a href="/relawan"

class="text-amber-800 font-semibold hover:underline">


← Kembali ke Beranda


</a>





<div class="bg-white rounded-3xl shadow-lg p-8 mt-8 max-w-4xl mx-auto">





@if($item->gambar)
    <img src="{{ asset('storage/'.$item->gambar) }}"
         class="w-full h-80 object-cover">
@else
    <img src="{{ asset('images/Gema aksara gambar.png') }}"
         class="w-full h-80 object-cover">
@endif





<div class="p-8">





<span class="bg-amber-100 text-amber-800 px-4 py-2 rounded-full text-sm font-semibold">


📚 Literasi Anak


</span>





<span class="ml-3 bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">


🟢 Pendaftaran Dibuka


</span>






<h1 class="text-4xl font-bold text-amber-900 mt-5">


{{ $item->nama_kegiatan }}


</h1>






<p class="mt-5 text-gray-600 leading-8">



{{ $item->deskripsi }}


</p>






<div class="grid md:grid-cols-2 gap-5 mt-8">




<div class="bg-stone-100 rounded-xl p-4">


📅 <b>Tanggal</b>

<p class="mt-2">

{{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}

</p>


</div>





<div class="bg-stone-100 rounded-xl p-4">


🕘 <b>Waktu</b>


<p class="mt-2">

{{ $item->jam_mulai }}

</p>



</div>






<div class="bg-stone-100 rounded-xl p-4">


📍 <b>Lokasi</b>


<p class="mt-2">

{{ $item->lokasi }}


</p>



</div>






<div class="bg-stone-100 rounded-xl p-4">


👥 <b>Kuota Relawan</b>



<p class="mt-2">

{{ $item->kuota_relawan }} Orang



</p>



</div>




</div>



</div>



</div>








<!-- Form -->

<div class="bg-white rounded-3xl shadow-lg p-8 mt-8">



<h2 class="text-3xl font-bold text-amber-900 mb-8">


Formulir Pendaftaran Relawan


</h2>





<form action="/pendaftaran"method="POST">
    @csrf
<input type="hidden"
       name="kegiatan_id"
       value="{{ $item->id_kegiatan }}">




<label class="font-semibold">


Nama Lengkap


</label>


<input type="text"
name="nama"
placeholder="Masukkan nama lengkap"

class="w-full border rounded-xl p-3 mt-2 mb-5">








<label class="font-semibold">


Jenis Kelamin


</label>




<div class="mt-3 mb-5 flex gap-8">



<label>

<input type="radio" name="jenis_kelamin" value="laki-laki">
Laki-laki


</label>



<label>

<input type="radio" name="jenis_kelamin" value="perempuan">

Perempuan


</label>



</div>









<label class="font-semibold">


No Telepon / WA


</label>



<input type="text"
name="nomor_telepon"

placeholder="08xxxxxxxxxx"

class="w-full border rounded-xl p-3 mt-2 mb-5">








<label class="font-semibold">


Alamat Rumah


</label>



<textarea
name="alamat"
rows="3"

placeholder="Masukkan alamat lengkap"

class="w-full border rounded-xl p-3 mt-2 mb-5">

</textarea>








<label class="font-semibold">


Alasan Mengikuti


</label>




<textarea
name="alasan"
rows="4"

placeholder="Ceritakan alasan Anda mengikuti kegiatan ini"

class="w-full border rounded-xl p-3 mt-2 mb-6">

</textarea>






<button

class="bg-amber-700 hover:bg-amber-800 text-white px-7 py-3 rounded-xl">


Ajukan Pendaftaran Sebagai Relawan


</button>





</form>



</div>





</div>




</body>

</html>