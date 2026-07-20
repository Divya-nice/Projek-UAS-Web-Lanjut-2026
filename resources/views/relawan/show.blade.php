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
        <img src="{{ asset('images/buku.png') }}" class="w-8">
        <h1 class="font-bold text-2xl">GemaAksara</h1>
    </div>

    <div class="flex gap-14 font-medium">
        <a href="{{ route('relawan.beranda') }}" class="hover:text-yellow-300">
            Beranda Kegiatan
        </a>

        <a href="{{ route('relawan.jadwal') }}" class="hover:text-yellow-300">
            Jadwal Saya
        </a>

        <a href="{{ route('profil.index') }}" class="hover:text-yellow-300">
            Profil Saya
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

<div class="max-w-6xl mx-auto py-10">

    <a href="{{ route('relawan.beranda') }}"
        class="text-amber-800 font-semibold hover:underline">

        ← Kembali ke Beranda

    </a>

    <!-- Detail Kegiatan -->
    <div class="bg-white rounded-3xl shadow-lg p-8 mt-8 max-w-4xl mx-auto">

        @if($item->gambar)
            <img src="{{ asset('storage/'.$item->gambar) }}"
                class="w-full h-80 object-cover rounded-2xl">
        @else
            <img src="{{ asset('images/Gema aksara gambar.png') }}"
                class="w-full h-80 object-cover rounded-2xl">
        @endif

        <div class="mt-6">

            @if($item->status == 'Pendaftaran Dibuka')

                <span class="ml-3 bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-semibold">
                    🟢 {{ $item->status }}
                </span>

            @else

                <span class="ml-3 bg-red-100 text-red-700 px-4 py-2 rounded-full text-sm font-semibold">
                    🔴 {{ $item->status }}
                </span>

            @endif

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
                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y') }}
                    </p>
                </div>

                <div class="bg-stone-100 rounded-xl p-4">
                    🕘 <b>Jam Mulai</b>
                    <p class="mt-2">
                        {{ \Carbon\Carbon::parse($item->jam_mulai)->format('H:i') }} WIB
                    </p>
                </div>

                <div class="bg-stone-100 rounded-xl p-4">
                    📍 <b>Lokasi</b>
                    <p class="mt-2">
                        {{ $item->lokasi }}
                    </p>
                </div>

                <div class="bg-stone-100 rounded-xl p-4">
                    👥 <b>Kuota</b>
                    <p class="mt-2">
                        {{ $item->kuota_relawan }} Orang
                    </p>
                </div>

            </div>

        </div>

    </div>

    <!-- Form Pendaftaran -->
    <div class="bg-white rounded-3xl shadow-lg p-8 mt-8 max-w-4xl mx-auto">

        <h2 class="text-3xl font-bold text-amber-900 mb-8">
            Formulir Pendaftaran Relawan
        </h2>

        @if ($errors->any())

        <div class="mb-6 bg-red-100 border border-red-300 text-red-700 rounded-xl p-4">

            <p class="font-semibold mb-2">
                Terjadi kesalahan:
            </p>

            <ul class="list-disc ml-5">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

        @endif

        <form action="{{ url('/pendaftaran') }}" method="POST">

            @csrf

            <input
                type="hidden"
                name="kegiatan_id"
                value="{{ $item->id_kegiatan }}">

            <label class="font-semibold">
                Nama Lengkap
            </label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama', $user->name) }}"
                class="w-full border rounded-xl p-3 mt-2 mb-5 bg-gray-100"
                readonly
                required>

            <label class="font-semibold">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                class="w-full border rounded-xl p-3 mt-2 mb-5 bg-gray-100"
                readonly
                required>

            <label class="font-semibold">
                Jenis Kelamin
            </label>

            <div class="mt-3 mb-5 flex gap-8">

                <label>
                    <input
                        type="radio"
                        name="jenis_kelamin"
                        value="laki-laki">

                    Laki-laki
                </label>

                <label>
                    <input
                        type="radio"
                        name="jenis_kelamin"
                        value="perempuan">

                    Perempuan
                </label>

            </div>

            <label class="font-semibold">
                No Telepon / WA
            </label>

            <input
                type="text"
                name="no_hp"
                value="{{ old('no_hp') }}"
                class="w-full border rounded-xl p-3 mt-2 mb-5"
                placeholder="08xxxxxxxxxx">

            <label class="font-semibold">
                Alamat Rumah
            </label>

            <textarea
                name="alamat"
                rows="3"
                class="w-full border rounded-xl p-3 mt-2 mb-5"
                placeholder="Masukkan alamat lengkap">{{ old('alamat') }}</textarea>

            <label class="font-semibold">
                Alasan Mengikuti
            </label>

            <textarea
                name="alasan"
                rows="4"
                class="w-full border rounded-xl p-3 mt-2 mb-6"
                placeholder="Ceritakan alasan Anda mengikuti kegiatan ini">{{ old('alasan') }}</textarea>

            @if(session('error'))

            <div class="mb-5 bg-red-100 border border-red-300 text-red-700 px-4 py-3 rounded-xl">
                {{ session('error') }}
            </div>

            @endif

            @if($item->status != 'Pendaftaran Dibuka')

            <button
                type="button"
                disabled
                class="bg-gray-400 text-white px-7 py-3 rounded-xl cursor-not-allowed font-semibold transition">

                Pendaftaran Ditutup

            </button>

            @elseif($kuotaPenuh)

            <button
                type="button"
                disabled
                class="bg-red-600 text-white px-7 py-3 rounded-xl cursor-not-allowed font-semibold transition">

                Kuota Relawan Telah Penuh

            </button>

            @elseif($sudahDaftar)

            <div class="bg-green-100 border border-green-300 text-green-700 px-4 py-3 rounded-xl font-semibold transition">

                ✅ Kamu sudah mendaftar kegiatan ini sebelumnya.

            </div>

            @else

            <button
                type="submit"
                class="bg-amber-700 hover:bg-amber-800 text-white px-7 py-3 rounded-xl font-semibold transition">

                Ajukan Pendaftaran

            </button>

            @endif

        </form>

    </div>

</div>

</body>
</html>