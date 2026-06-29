@extends('admin.layouts.app')

@section('title', 'Dashboard Admin')

@section('content')

<h2 class="page-title">
    Dashboard Admin
</h2>

<div class="row g-4">

    <!-- Total Kegiatan -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body d-flex align-items-center">

                <div class="bg-warning bg-opacity-25 rounded-circle p-3 me-3">
                    <i class="bi bi-calendar-event-fill text-warning fs-2"></i>
                </div>

                <div>
                    <h6 class="text-muted mb-1">
                        Total Kegiatan
                    </h6>

                    <h2 class="fw-bold mb-0">
                        {{ $totalKegiatan ?? 12 }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Relawan -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body d-flex align-items-center">

                <div class="bg-success bg-opacity-25 rounded-circle p-3 me-3">
                    <i class="bi bi-people-fill text-success fs-2"></i>
                </div>

                <div>
                    <h6 class="text-muted mb-1">
                        Total Relawan
                    </h6>

                    <h2 class="fw-bold mb-0">
                        {{ $totalRelawan ?? 45 }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Pending -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body d-flex align-items-center">

                <div class="bg-danger bg-opacity-25 rounded-circle p-3 me-3">
                    <i class="bi bi-clock-history text-danger fs-2"></i>
                </div>

                <div>
                    <h6 class="text-muted mb-1">
                        Menunggu Verifikasi
                    </h6>

                    <h2 class="fw-bold mb-0">
                        {{ $pendingRelawan ?? 8 }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Aktif -->
    <div class="col-lg-3 col-md-6">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-body d-flex align-items-center">

                <div class="bg-primary bg-opacity-25 rounded-circle p-3 me-3">
                    <i class="bi bi-check-circle-fill text-primary fs-2"></i>
                </div>

                <div>
                    <h6 class="text-muted mb-1">
                        Kegiatan Aktif
                    </h6>

                    <h2 class="fw-bold mb-0">
                        {{ $kegiatanAktif ?? 6 }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

</div>

<div class="row mt-4">

    <div class="col-lg-8">

        <div class="card-custom">

            <div class="card-header-custom">

                <i class="bi bi-calendar-week-fill"></i>

                Kegiatan Terbaru

            </div>

            <div class="card-body-custom">

                <table class="table table-hover align-middle">

                    <thead>

                    <tr>

                        <th>Nama Kegiatan</th>

                        <th>Tanggal</th>

                        <th>Lokasi</th>

                        <th>Status</th>

                    </tr>

                    </thead>

                    <tbody>

                    <tr>

                        <td>Gemar Membaca Buku</td>

                        <td>25 Juni 2026</td>

                        <td>Pontianak</td>

                        <td>
                            <span class="badge bg-success">
                                Aktif
                            </span>
                        </td>

                    </tr>

                    <tr>

                        <td>Kelas Ceria Mewarnai</td>

                        <td>30 Juni 2026</td>

                        <td>Kubu Raya</td>

                        <td>
                            <span class="badge bg-warning text-dark">
                                Akan Datang
                            </span>
                        </td>

                    </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <div class="col-lg-4">

        <div class="card-custom">

            <div class="card-header-custom">

                <i class="bi bi-bell-fill"></i>

                Aktivitas

            </div>

            <div class="card-body-custom">

                <div class="mb-4">

                    <strong>Budi Santoso</strong>

                    <br>

                    <small class="text-muted">
                        Mendaftar sebagai relawan.
                    </small>

                </div>

                <div class="mb-4">

                    <strong>Siti Aminah</strong>

                    <br>

                    <small class="text-muted">
                        Menunggu verifikasi admin.
                    </small>

                </div>

                <div>

                    <strong>Admin</strong>

                    <br>

                    <small class="text-muted">
                        Menambahkan kegiatan baru.
                    </small>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection