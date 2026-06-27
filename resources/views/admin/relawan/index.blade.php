@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="mb-4 text-start">
        <h2 class="fw-bold text-dark">Verifikasi Relawan</h2>
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

{{-- Include Modal Detail Verifikasi --}}
@include('admin.relawan.modal-verifikasi')

<script>
    function openVerifikasiModal(data) {
        // Set Action URL Form Keputusan
        document.getElementById('form-keputusan-admin').action = `/admin/verifikasi-relawan/${data.id}/keputusan`;

        // Isi Detail Teks Data Diri Relawan ke Modal
        document.getElementById('detail-nama').innerText = data.nama_lengkap;
        document.getElementById('detail-email').innerText = data.email;
        document.getElementById('detail-telepon').innerText = data.nomor_telepon || 'Tidak mengisi data';
        document.getElementById('detail-alamat').innerText = data.alamat_rumah || 'Tidak mengisi data';
        document.getElementById('detail-kegiatan').innerText = data.kegiatan?.nama_kegiatan || data.pilihan_kegiatan;
        document.getElementById('detail-alasan').value = data.alasan_bergabung || '';

        // Tampilkan Modal secara manual
        const modal = document.getElementById('modal-verifikasi-relawan');
        modal.style.display = 'block';
        modal.style.opacity = '1';
        modal.classList.add('show');
        document.body.classList.add('modal-open');
        
        // Buat Backdrop Gelap
        if (!document.getElementById('modal-backdrop-custom')) {
            const backdrop = document.createElement('div');
            backdrop.id = 'modal-backdrop-custom';
            backdrop.className = 'modal-backdrop fade show';
            backdrop.style.zIndex = '1040';
            document.body.appendChild(backdrop);
        }
    }

    function closeVerifikasiModal() {
        const modal = document.getElementById('modal-verifikasi-relawan');
        modal.style.display = 'none';
        modal.classList.remove('show');
        document.body.classList.remove('modal-open');
        
        const backdrop = document.getElementById('modal-backdrop-custom');
        if (backdrop) backdrop.remove();
    }
</script>
@endsection