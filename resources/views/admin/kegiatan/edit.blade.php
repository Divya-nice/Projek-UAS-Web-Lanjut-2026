@extends('admin.layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Edit Kegiatan
        </h2>

        <p class="text-muted">
            Perbarui data kegiatan GemaAksara.
        </p>
    </div>

    <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

<div class="card-custom">

    <div class="card-header-custom">
        <i class="bi bi-pencil-fill"></i>
        Form Edit Kegiatan
    </div>

    <div class="card-body-custom">

        <form action="{{ route('kegiatan.update', $kegiatan->id_kegiatan) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            {{-- Nama Kegiatan --}}
            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Kegiatan
                </label>

                <input
                    type="text"
                    name="nama_kegiatan"
                    class="form-control @error('nama_kegiatan') is-invalid @enderror"
                    value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}">

                @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Tanggal & Jam --}}
            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control @error('tanggal') is-invalid @enderror"
                        value="{{ old('tanggal', \Carbon\Carbon::parse($kegiatan->tanggal)->format('Y-m-d')) }}">

                    @error('tanggal')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Jam Mulai
                    </label>

                    <input
                        type="time"
                        name="jam_mulai"
                        class="form-control @error('jam_mulai') is-invalid @enderror"
                        value="{{ old('jam_mulai', \Carbon\Carbon::parse($kegiatan->jam_mulai)->format('H:i')) }} WIB">

                    @error('jam_mulai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            {{-- Lokasi & Kuota --}}
            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        name="lokasi"
                        class="form-control @error('lokasi') is-invalid @enderror"
                        value="{{ old('lokasi', $kegiatan->lokasi) }}">

                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Kuota
                    </label>

                    <input
                        type="number"
                        name="kuota_relawan"
                        min="1"
                        class="form-control @error('kuota_relawan') is-invalid @enderror"
                        value="{{ old('kuota_relawan', $kegiatan->kuota_relawan) }}">

                    @error('kuota_relawan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            {{-- Status --}}
            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Status Pendaftaran
                </label>

                <select
                    name="status"
                    class="form-select @error('status') is-invalid @enderror">

                    <option value="Pendaftaran Dibuka"
                        {{ old('status', $kegiatan->status) == 'Pendaftaran Dibuka' ? 'selected' : '' }}>
                        Pendaftaran Dibuka
                    </option>

                    <option value="Pendaftaran Ditutup"
                        {{ old('status', $kegiatan->status) == 'Pendaftaran Ditutup' ? 'selected' : '' }}>
                        Pendaftaran Ditutup
                    </option>

                </select>

                @error('status')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Gambar --}}
            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Gambar Kegiatan
                </label>

                @if($kegiatan->gambar)

                    <div class="mb-2">
                        <img
                            src="{{ asset('storage/' . $kegiatan->gambar) }}"
                            alt="{{ $kegiatan->nama_kegiatan }}"
                            style="max-width:200px; border-radius:8px;">
                    </div>

                @endif

                <input
                    type="file"
                    name="gambar"
                    accept="image/png,image/jpeg,image/jpg"
                    class="form-control @error('gambar') is-invalid @enderror">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                    Format JPG, JPEG, PNG. Maksimal 2 MB.
                </small>

                @error('gambar')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- Tombol --}}
            <div class="text-end">

                <a href="{{ route('kegiatan.index') }}"
                   class="btn btn-outline-secondary">
                    Batal
                </a>

                <button
                    type="submit"
                    class="btn btn-brown">

                    <i class="bi bi-save-fill"></i>
                    Simpan Perubahan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection