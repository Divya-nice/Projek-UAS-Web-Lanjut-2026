@extends('admin.layouts.app')

@section('title', 'Daftar Relawan')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-7">

        <div class="card-custom">

            <div class="card-header-custom">
                <i class="bi bi-person-plus-fill me-2"></i>
                Formulir Pendaftaran Relawan
            </div>

            <div class="card-body-custom">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('relawan.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select" required>
                            <option value="">-- Pilih --</option>
                            <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="2" required>{{ old('alamat') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alasan Mendaftar</label>
                        <textarea name="alasan" class="form-control" rows="3" required>{{ old('alasan') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-send-fill me-1"></i> Daftar Sekarang
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection