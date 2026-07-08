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

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

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
                    id="cariRelawan"
                    class="form-control"
                    placeholder="Cari nama relawan...">
            </div>
        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle text-center" id="tabelRelawan">

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

                    @forelse ($relawan as $item)
                    <tr>
                        <td>{{ $loop->iteration + ($relawan->currentPage() - 1) * $relawan->perPage() }}</td>

                        <td class="fw-semibold nama-relawan">
                            {{ $item->nama }}
                        </td>

                        <td>{{ $item->email }}</td>

                        <td>{{ $item->no_hp }}</td>

                        <td>
                            @if ($item->status == 'Pending')
                                <span class="badge bg-warning text-dark px-3 py-2">Pending</span>
                            @elseif ($item->status == 'Diterima')
                                <span class="badge bg-success px-3 py-2">Diterima</span>
                            @else
                                <span class="badge bg-danger px-3 py-2">Ditolak</span>
                            @endif
                        </td>

                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">

                                <button
                                    type="button"
                                    class="btn btn-info btn-sm px-3"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modalDetail{{ $item->id_relawan }}">
                                    <i class="bi bi-eye-fill"></i> Detail
                                </button>

                                @if ($item->status == 'Pending')

                                <form action="{{ route('relawan.terima', $item->id_relawan) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-success btn-sm px-3"
                                        onclick="return confirm('Terima relawan ini?')">
                                        <i class="bi bi-check-circle-fill"></i> Terima
                                    </button>
                                </form>

                                <form action="{{ route('relawan.tolak', $item->id_relawan) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger btn-sm px-3"
                                        onclick="return confirm('Tolak relawan ini?')">
                                        <i class="bi bi-x-circle-fill"></i> Tolak
                                    </button>
                                </form>

                                @endif

                            </div>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-muted py-4">
                            Belum ada data relawan yang mendaftar.
                        </td>
                    </tr>
                    @endforelse

                </tbody>

            </table>

        </div>

        <div class="mt-3">
            {{ $relawan->links() }}
        </div>

    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white fw-bold py-3">Daftar Relawan</div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle m-0 text-start">
                    <thead style="background-color: #5c4033; color: white;">
                        <tr>
                            <th width="5%" class="ps-3">No</th>
                            <th>Nama Relawan</th>
                            <th>Email</th>
                            <th>Kegiatan</th>
                            <th>Status</th>
                            <th width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($relawan as $index => $item)
                            <tr>
                                <td class="ps-3">{{ $index + 1 }}</td>
                                <td class="fw-semibold">{{ $item->nama_lengkap }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->kegiatan->nama_kegiatan ?? $item->pilihan_kegiatan }}</td>
                                <td>
                                    @if($item->status == 'Menunggu')
                                        <span class="badge bg-warning text-dark px-3 py-2" style="border-radius: 6px;">Menunggu</span>
                                    @elseif($item->status == 'Terima')
                                        <span class="badge bg-success px-3 py-2" style="border-radius: 6px;">Diterima</span>
                                    @else
                                        <span class="badge bg-danger px-3 py-2" style="border-radius: 6px;">Ditolak</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-sm text-white px-3 fw-bold" style="background-color: #c69c6d; border-radius: 6px;" onclick="openVerifikasiModal({{ json_encode($item) }})">
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">Tidak ada data permohonan relawan baru</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- ================= MODAL DETAIL RELAWAN (di luar tabel) ================= --}}
@foreach ($relawan as $item)
<div class="modal fade" id="modalDetail{{ $item->id_relawan }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header" style="background-color:#8B5E34; color:#fff;">
                <h5 class="modal-title">
                    <i class="bi bi-person-vcard-fill me-2"></i>Detail Relawan
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-start">

                <table class="table table-borderless mb-0">
                    <tr>
                        <th width="150">Nama</th>
                        <td>: {{ $item->nama }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>: {{ $item->jenis_kelamin ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>: {{ $item->email }}</td>
                    </tr>
                    <tr>
                        <th>No HP</th>
                        <td>: {{ $item->no_hp }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>: {{ $item->alamat }}</td>
                    </tr>
                    <tr>
                        <th>Alasan Mendaftar</th>
                        <td>: {{ $item->alasan }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>: {{ $item->status }}</td>
                    </tr>
                    <tr>
                        <th>Tanggal Daftar</th>
                        <td>: {{ $item->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                </table>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Tutup
                </button>
            </div>

        </div>
    </div>
</div>
@endforeach

@endsection

@push('scripts')
<script>
    document.getElementById('cariRelawan').addEventListener('keyup', function () {
        const keyword = this.value.toLowerCase();
        document.querySelectorAll('#tabelRelawan tbody tr').forEach(function (row) {
            const namaCell = row.querySelector('.nama-relawan');
            if (!namaCell) return;
            const nama = namaCell.textContent.toLowerCase();
            row.style.display = nama.includes(keyword) ? '' : 'none';
        });
    });
</script>
@endpush
