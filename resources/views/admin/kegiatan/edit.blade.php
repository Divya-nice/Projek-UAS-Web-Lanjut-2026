@extends('admin.layouts.app')

@section('title','Edit Kegiatan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="page-title mb-1">
            Edit Kegiatan
        </h2>

        <p class="text-muted">
            Perbarui informasi kegiatan GEMAKSARA.
        </p>
    </div>

    <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i>
        Kembali
    </a>

</div>

<div class="card-custom">

    <div class="card-header-custom">
        <i class="bi bi-pencil-square"></i>
        Form Edit Kegiatan
    </div>

    <div class="card-body-custom">

        <form action="{{ route('kegiatan.update',$kegiatan->id_kegiatan) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Nama Kegiatan
                </label>

                <input
                    type="text"
                    name="nama_kegiatan"
                    class="form-control @error('nama_kegiatan') is-invalid @enderror"
                    value="{{ old('nama_kegiatan',$kegiatan->nama_kegiatan) }}">

                @error('nama_kegiatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-3">

                <label class="form-label fw-semibold">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    rows="5"
                    class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi',$kegiatan->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="row">

                <div class="col-md-6 mb-3">

                    <label class="form-label fw-semibold">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        name="tanggal"
                        class="form-control @error('tanggal') is-invalid @enderror"
                        value="{{ old('tanggal',$kegiatan->tanggal) }}">

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
                        value="{{ old('jam_mulai',$kegiatan->jam_mulai) }}">

                    @error('jam_mulai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

            </div>

            <div class="mb-4">

                <label class="form-label fw-semibold">
                    Lokasi
                </label>

                <input
                    type="text"
                    name="lokasi"
                    class="form-control @error('lokasi') is-invalid @enderror"
                    value="{{ old('lokasi',$kegiatan->lokasi) }}">

                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="text-end">

                <a href="{{ route('kegiatan.index') }}" class="btn btn-outline-secondary">
                    Batal
                </a>

                <button type="submit" class="btn btn-brown">

                    <i class="bi bi-check-circle-fill"></i>

                    Update Kegiatan

                </button>

            </div>

        </form>

    </div>

</div>

@endsection