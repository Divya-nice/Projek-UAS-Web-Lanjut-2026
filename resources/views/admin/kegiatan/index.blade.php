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

        <h2 class="page-title mb-1">
            Kelola Kegiatan
        </h2>

        <p class="text-muted mb-0">
            Kelola seluruh kegiatan GEMAKSARA.
        </p>

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

<div class="col-md-5">

<input
type="text"
class="form-control"
placeholder="Cari kegiatan...">

</div>

</div>

<div class="table-responsive">

<table class="table table-hover align-middle">

<thead>

<tr>

<th width="60">No</th>

<th>Nama Kegiatan</th>

<th>Tanggal</th>

<th>Jam</th>

<th>Lokasi</th>

<th>Status</th>

<th width="220">Aksi</th>

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

<strong>

{{ $item->nama_kegiatan }}

</strong>

<br>

<small class="text-muted">

{{ Str::limit($item->deskripsi,50) }}

</small>

</td>

<td>

{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}

</td>

<td>

{{ $item->jam_mulai }}

</td>

<td>

{{ $item->lokasi }}

</td>

<td>

@if(isset($item->status))

@if($item->status=='Aktif')

<span class="badge bg-success">

Aktif

</span>

@else

<span class="badge bg-secondary">

Selesai

</span>

@endif

@else

<span class="badge bg-success">

Aktif

</span>

@endif

</td>

<td>

<a
href="{{ route('kegiatan.edit',$item->id_kegiatan) }}"
class="btn btn-warning btn-sm">

<i class="bi bi-pencil-square"></i>

</a>

<form
action="{{ route('kegiatan.destroy',$item->id_kegiatan) }}"
method="POST"
class="d-inline">

@csrf

@method('DELETE')

<button
class="btn btn-danger btn-sm"
onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">

<i class="bi bi-trash-fill"></i>

</button>

</form>

</td>

</tr>

@empty

<tr>

<td colspan="7">

<div class="text-center py-5">

<i class="bi bi-calendar-x display-4 text-secondary"></i>

<h5 class="mt-3">

Belum ada kegiatan

</h5>

<p class="text-muted">

Silakan tambahkan kegiatan baru.

</p>

<a
href="{{ route('kegiatan.create') }}"
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