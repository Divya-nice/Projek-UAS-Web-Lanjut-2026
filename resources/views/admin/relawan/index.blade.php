@extends('admin.layouts.app')

@section('title','Verifikasi Relawan')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="page-title mb-1">
            <i class="bi bi-people-fill me-2"></i>Verifikasi Relawan
        </h2>
        <p class="text-muted mb-0">
            Kelola data pendaftaran relawan GEMAKSARA.
        </p>
    </div>
</div>

<div class="card-custom">

    <div class="card-header-custom">
        <i class="bi bi-people-fill me-2"></i>
        Daftar Relawan
    </div>

    <div class="card-body-custom">

        <div class="row mb-4">
            <div class="col-md-5">
                <input
                    type="text"
                    class="form-control"
                    placeholder="Cari nama relawan...">
            </div>
        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle text-center">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No HP</th>
                        <th>Status</th>
                        <th width="280">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>

                        <td class="fw-semibold">
                            Andi Saputra
                        </td>

                        <td>andi@gmail.com</td>

                        <td>081234567890</td>

                        <td>
                            <span class="badge bg-warning text-dark px-3 py-2">
                                Pending
                            </span>
                        </td>

                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">

                                <button class="btn btn-info btn-sm px-3">
                                    <i class="bi bi-eye-fill"></i> Detail
                                </button>

                                <button class="btn btn-success btn-sm px-3">
                                    <i class="bi bi-check-circle-fill"></i> Terima
                                </button>

                                <button class="btn btn-danger btn-sm px-3">
                                    <i class="bi bi-x-circle-fill"></i> Tolak
                                </button>

                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>2</td>

                        <td class="fw-semibold">
                            Siti Rahma
                        </td>

                        <td>siti@gmail.com</td>

                        <td>082233445566</td>

                        <td>
                            <span class="badge bg-success px-3 py-2">
                                Diterima
                            </span>
                        </td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-info btn-sm px-3">
                                    <i class="bi bi-eye-fill"></i> Detail
                                </button>
                            </div>
                        </td>

                    </tr>

                    <tr>

                        <td>3</td>

                        <td class="fw-semibold">
                            Budi Hartono
                        </td>

                        <td>budi@gmail.com</td>

                        <td>081111111111</td>

                        <td>
                            <span class="badge bg-danger px-3 py-2">
                                Ditolak
                            </span>
                        </td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-info btn-sm px-3">
                                    <i class="bi bi-eye-fill"></i> Detail
                                </button>
                            </div>
                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection