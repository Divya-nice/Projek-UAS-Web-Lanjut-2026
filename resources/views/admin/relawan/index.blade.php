@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <h2 class="mb-4">Verifikasi Relawan</h2>

    <div class="card shadow-sm">

        <div class="card-header bg-dark text-white">
            Daftar Relawan
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover">

                <thead class="table-secondary">
                    <tr>
                        <th>No</th>
                        <th>Nama Relawan</th>
                        <th>Email</th>
                        <th>Kegiatan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>budi@gmail.com</td>
                        <td>Gemar Membaca Buku</td>
                        <td>
                            <span class="badge bg-warning">
                                Menunggu
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">
                                Terima
                            </button>

                            <button class="btn btn-danger btn-sm">
                                Tolak
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Siti Aminah</td>
                        <td>siti@gmail.com</td>
                        <td>Kelas Ceria Anak</td>
                        <td>
                            <span class="badge bg-warning">
                                Menunggu
                            </span>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm">
                                Terima
                            </button>

                            <button class="btn btn-danger btn-sm">
                                Tolak
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection