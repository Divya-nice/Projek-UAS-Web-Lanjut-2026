@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Kegiatan</h2>

        <button class="btn btn-success">
            + Tambah Kegiatan
        </button>
    </div>

    <div class="card shadow-sm border-0">

        <div class="card-header bg-dark text-white">
            Daftar Kegiatan Aktif
        </div>

        <div class="card-body">

            <table class="table table-bordered table-hover align-middle">

                <thead style="background-color:#8B5E3C;color:white;">
                    <tr>
                        <th width="5%">No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($kegiatan as $index => $item)

                        <tr>
                            <td>{{ $index + 1 }}</td>

                            <td>
                                {{ $item->nama_kegiatan }}
                            </td>

                            <td>
                                {{ $item->tanggal }}
                            </td>

                            <td>
                                {{ $item->jam_mulai }}
                            </td>

                            <td>
                                {{ $item->lokasi }}
                            </td>

                            <td>
                                <span class="badge bg-success">
                                    Aktif
                                </span>
                            </td>

                            <td>

                                <button
                                    class="btn btn-warning btn-sm">
                                    Edit
                                </button>

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus kegiatan ini?')">
                                    Hapus
                                </button>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="7" class="text-center">
                                Tidak ada data kegiatan
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection