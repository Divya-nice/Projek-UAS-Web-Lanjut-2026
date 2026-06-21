<div class="modal fade" id="modal-kegiatan" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">Tambah Kegiatan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <form id="form-kegiatan" action="" method="POST">
                @csrf
                <div id="method-container"></div>
                
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama Kegiatan</label>
                        <input type="text" id="input-nama" name="nama_kegiatan" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-tanggal" class="form-label">Tanggal</label>
                        <input type="date" id="input-tanggal" name="tanggal" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-jam" class="form-label">Jam Mulai</label>
                        <input type="time" id="input-jam" name="jam_mulai" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="input-lokasi" class="form-label">Lokasi</label>
                        <input type="text" id="input-lokasi" name="lokasi" class="form-control" required>
                    </div>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" id="btn-submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>

        </div>
    </div>
</div>

<script>
    let kegiatanModal;

    // Inisialisasi modal Bootstrap saat halaman selesai dimuat
    document.addEventListener("DOMContentLoaded", function() {
        kegiatanModal = new bootstrap.Modal(document.getElementById('modal-kegiatan'));
    });

    // Fungsi Buka Modal Tambah
    function openAddModal() {
        document.getElementById('modal-title').innerText = "Tambah Kegiatan Baru";
        document.getElementById('btn-submit').innerText = "Tambah Kegiatan";
        
        // FIX: Diubah dari 'admin.kegiatan.store' menjadi 'kegiatan.store'
        document.getElementById('form-kegiatan').action = "{{ route('kegiatan.store') }}";
        document.getElementById('method-container').innerHTML = "";
        
        document.getElementById('form-kegiatan').reset();
        kegiatanModal.show();
    }

    // Fungsi Buka Modal Edit
    function openEditModal(data) {
        document.getElementById('modal-title').innerText = "Edit Detail Kegiatan";
        document.getElementById('btn-submit').innerText = "Simpan Perubahan";
        
        // FIX: Diubah dari '/admin/kegiatan/...' menjadi '/kegiatan/...' sesuai struktur route web.php
        document.getElementById('form-kegiatan').action = `/kegiatan/${data.id}`;
        document.getElementById('method-container').innerHTML = `<input type="hidden" name="_method" value="PUT">`;
        
        // Isi form dengan data dari baris tabel Anggota 2
        document.getElementById('input-nama').value = data.nama_kegiatan;
        document.getElementById('input-tanggal').value = data.tanggal;
        document.getElementById('input-jam').value = data.jam_mulai;
        document.getElementById('input-lokasi').value = data.lokasi;
        
        kegiatanModal.show();
    }
</script>