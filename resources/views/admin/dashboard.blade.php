@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">Dashboard Admin</h2>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>Total Kegiatan</h5>
                    <h2>12</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>Menunggu Review</h5>
                    <h2>5</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>Relawan Terdaftar</h5>
                    <h2>48</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow border-0 mt-4">
        <div class="card-header">
            <h5 class="mb-0">Aktivitas Terbaru</h5>
        </div>

        <div class="card-body">

            <ul class="list-group">

                <li class="list-group-item">
                    Budi Santoso mendaftar pada kegiatan
                    <strong>Gemar Membaca Buku</strong>
                    <span class="text-muted">(10 menit lalu)</span>
                </li>

                <li class="list-group-item">
                    Siti Aminah mendaftar pada kegiatan
                    <strong>Kelas Ceria Mewarnai</strong>
                    <span class="text-muted">(1 jam lalu)</span>
                </li>

                <li class="list-group-item">
                    Ahmad Dani diterima sebagai relawan
                    <strong>Gemar Membaca Buku</strong>
                </li>

            </ul>

        </div>
    </div>

</div>

@endsection