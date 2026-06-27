@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Kegiatan</h2>

        <button class="btn btn-success" onclick="openTambahModal()">
            + Tambah Kegiatan
        </button>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-dark text-white">Daftar Kegiatan Aktif</div>
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead style="background-color:#8B5E3C; color:white;">
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
                            <td>{{ $item->nama_kegiatan }}</td>
                            <td>{{ $item->tanggal }}</td>
                            <td>{{ $item->jam_mulai }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td><span class="badge bg-success">Aktif</span></td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="openEditModal({{ json_encode($item) }})">
                                    Edit
                                </button>
                                <button class="btn btn-danger btn-sm" onclick="openHapusModal({{ json_encode($item) }})">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Tidak ada data kegiatan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Memanggil ketiga file modal terpisah --}}
@include('admin.kegiatan.modal-tambah')
@include('admin.kegiatan.modal-edit')
@include('admin.kegiatan.modal-hapus') {{-- Ditambahkan di sini --}}

<script>
    // --- LENGKAP KONTROL TAMBAH ---
    function openTambahModal() {
        const modal = document.getElementById('modal-tambah-kegiatan');
        modal.style.display = 'block';
        modal.style.opacity = '1';
        modal.classList.add('show');
        document.body.classList.add('modal-open');
        createBackdrop();
    }
    function closeTambahModal() {
        const modal = document.getElementById('modal-tambah-kegiatan');
        modal.style.display = 'none';
        modal.classList.remove('show');
        removeBackdrop();
    }

    // --- LENGKAP KONTROL EDIT ---
    function openEditModal(data) {
        // 1. Set URL Action (menuju rute update sesuai ID data)
        document.getElementById('form-edit-kegiatan').action = `/admin/kegiatan/${data.id}`;

        // 2. Isi kotak-kotak form dengan data yang diklik
        document.getElementById('edit-nama').value = data.nama_kegiatan;
        document.getElementById('edit-tanggal').value = data.tanggal;
        document.getElementById('edit-jam').value = data.jam_mulai;
        document.getElementById('edit-lokasi').value = data.lokasi;
        document.getElementById('edit-deskripsi').value = data.deskripsi || '';

        // 3. Munculkan kotaknya
        const modal = document.getElementById('modal-edit-kegiatan');
        modal.style.display = 'block';
        modal.classList.add('show');
        createBackdrop();
    }
    function closeEditModal() {
        const modal = document.getElementById('modal-edit-kegiatan');
        modal.style.display = 'none';
        modal.classList.remove('show');
        removeBackdrop();
    }

    // --- LENGKAP KONTROL HAPUS (Baru Ditambahkan) ---
    function openHapusModal(data) {
        // Set URL target delete backend sesuai ID data
        document.getElementById('form-hapus-kegiatan').action = `/admin/kegiatan/${data.id}`;
        
        // Tampilkan nama kegiatan di teks modal biar dinamis sesuai sketsa
        document.getElementById('hapus-nama-kegiatan').innerText = `"${data.nama_kegiatan}"`;

        const modal = document.getElementById('modal-hapus-kegiatan');
        modal.style.display = 'block';
        modal.style.opacity = '1';
        modal.classList.add('show');
        document.body.classList.add('modal-open');
        createBackdrop();
    }
    function closeHapusModal() {
        const modal = document.getElementById('modal-hapus-kegiatan');
        modal.style.display = 'none';
        modal.classList.remove('show');
        removeBackdrop();
    }

    // --- UTILITY BACKDROP ---
    function createBackdrop() {
        if (!document.getElementById('modal-backdrop-custom')) {
            const backdrop = document.createElement('div');
            backdrop.id = 'modal-backdrop-custom';
            backdrop.className = 'modal-backdrop fade show';
            backdrop.style.zIndex = '1040';
            document.body.appendChild(backdrop);
        }
    }
    function removeBackdrop() {
        document.body.classList.remove('modal-open');
        const backdrop = document.getElementById('modal-backdrop-custom');
        if (backdrop) backdrop.remove();
    }
</script>

{{-- Ini di file index.blade.php --}}
@include('admin.kegiatan.modal-tambah')
@include('admin.kegiatan.modal-edit')
@include('admin.kegiatan.modal-hapus')

@endsection