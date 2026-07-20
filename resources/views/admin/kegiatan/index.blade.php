@extends('admin.layouts.app')

@section('title','Kelola Kegiatan')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show shadow-sm">
    <i class="bi bi-check-circle-fill"></i>
    {{ session('success') }}
    <button class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="page-title mb-1">Kelola Kegiatan</h2>
        <p class="text-muted mb-0">Kelola seluruh kegiatan GEMAKSARA.</p>
    </div>

    <a href="{{ route('kegiatan.create') }}" class="btn btn-brown">
        <i class="bi bi-plus-circle-fill"></i>
        Tambah Kegiatan
    </a>
</div>

<div class="card-custom">

    <div class="card-header-custom">
        <i class="bi bi-calendar-event-fill"></i>
        Daftar Kegiatan
    </div>

    <div class="card-body-custom">

        <div class="row mb-4">

            <div class="col-md-6">

                <form action="{{ route('kegiatan.index') }}" method="GET" class="d-flex">

                    <input
                        type="text"
                        name="keyword"
                        class="form-control me-2"
                        placeholder="Cari nama kegiatan atau lokasi..."
                        value="{{ request('keyword') }}">

                    <button type="submit" class="btn btn-brown me-2">

                        <i class="bi bi-search"></i>

                    </button>

                    @if(request('keyword'))

                        <a href="{{ route('kegiatan.index') }}" class="btn btn-secondary d-flex align-items-center justify-content-center">
                            Reset
                        </a>

                    @endif

                </form>

            </div>

        </div>

        <div class="table-responsive">

            <table class="table table-hover w-100">

                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th width="90">Foto</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Kuota</th>
                        <th>Status</th>
                        <th width="120">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse($kegiatan as $item)

                    <tr>

                        <td>
                            @if(method_exists($kegiatan,'firstItem'))
                                {{ $kegiatan->firstItem() + $loop->index }}
                            @else
                                {{ $loop->iteration }}
                            @endif
                        </td>

                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('storage/'.$item->gambar) }}"
                                     alt="{{ $item->nama_kegiatan }}"
                                     style="width:60px;height:60px;object-fit:cover;border-radius:8px;">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light"
                                     style="width:60px;height:60px;border-radius:8px;">
                                    <i class="bi bi-image text-secondary"></i>
                                </div>
                            @endif
                        </td>

                        <td style="min-width:270px; text-align:left;">

                            <div>

                                <div class="fw-semibold mb-1">
                                    {{ $item->nama_kegiatan }}
                                </div>

                                <small class="text-muted">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi,60) }}
                                </small>

                            </div>

                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($item->tanggal)->format('d F Y') }}
                        </td>

                        <td>
                            {{ \Carbon\Carbon::parse($item->jam_mulai)->format('H:i') }} WIB
                        </td>

                        <td>{{ \Illuminate\Support\Str::limit($item->lokasi, 30) }}</td>

                        <td>{{ $item->kuota_relawan }}</td>

                        <td>

                            @if($item->status == 'Pendaftaran Dibuka')

                            <span class="badge bg-success">
                                {{ $item->status }}
                            </span>

                            @elseif($item->status == 'Pendaftaran Ditutup')

                            <span class="badge bg-danger">
                                {{ $item->status }}
                            </span>

                            @else

                            <span class="badge bg-secondary">
                                {{ $item->status }}
                            </span>

                            @endif

                        </td>

                        <td>
                            <div class="d-flex flex-column align-items-center gap-2">
                                <a href="{{ route('kegiatan.edit', $item->id_kegiatan) }}"
                                    class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>

                                <form action="{{ route('kegiatan.destroy', $item->id_kegiatan) }}"
                                    method="POST"
                                    class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">

                                    <i class="bi bi-trash-fill"></i>

                                </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="9">

                            <div class="text-center py-5">

                                <i class="bi bi-calendar-x display-4 text-secondary"></i>

                                <h5 class="mt-3">
                                    Belum ada kegiatan
                                </h5>

                                <p class="text-muted">
                                    Silakan tambahkan kegiatan baru.
                                </p>

                                <a href="{{ route('kegiatan.create') }}"
                                   class="btn btn-brown">

                                    Tambah Kegiatan

                                </a>

                            </div>

                        </td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
        </div>

        @if(method_exists($kegiatan,'links'))
            <div class="mt-3">
                {{ $kegiatan->links() }}
            </div>
        @endif

    </div>
</div>

@endsection