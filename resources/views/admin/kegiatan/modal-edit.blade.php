<div class="modal fade" id="modal-edit-kegiatan" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 1050;">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content border-0 shadow-lg" style="background-color: #faf6f0; border-radius: 12px; overflow: hidden;">
            
            <div class="modal-header text-white border-0 px-4 py-3 d-flex justify-content-between align-items-center" style="background-color: #5c4033;">
                <h5 class="modal-title fw-bold m-0" style="font-size: 14px; letter-spacing: 0.5px;">KELOLA KEGIATAN: EDIT DETAIL ACARA</h5>
                <button type="button" onclick="closeEditModal()" style="background: none; border: none; color: #dfdfdf; font-size: 24px; cursor: pointer; line-height: 1;">&times;</button>
            </div>
            
            <form id="form-edit-kegiatan" action="" method="POST" class="m-0">
                @csrf
                @method('PUT') {{-- Wajib ada untuk proses Update di Laravel --}}
                
                <div class="modal-body p-4 text-start" style="max-height: 70vh; overflow-y: auto;">
                    
                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary d-block mb-1" style="font-size: 12px;">Nama Kegiatan</label>
                        <input type="text" id="edit-nama" name="nama_kegiatan" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 8px 12px; font-size: 14px;" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary d-block mb-1" style="font-size: 12px;">Tanggal Pelaksanaan</label>
                        <input type="date" id="edit-tanggal" name="tanggal" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 8px 12px; font-size: 14px;" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary d-block mb-1" style="font-size: 12px;">Waktu Mulai Acara</label>
                        <input type="time" id="edit-jam" name="jam_mulai" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 8px 12px; font-size: 14px;" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary d-block mb-1" style="font-size: 12px;">Lokasi / Tempat</label>
                        <input type="text" id="edit-lokasi" name="lokasi" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 8px 12px; font-size: 14px;" required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="fw-bold text-secondary d-block mb-1" style="font-size: 12px;">Deskripsi Lengkap Kegiatan</label>
                        <textarea id="edit-deskripsi" name="deskripsi" rows="4" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 8px 12px; font-size: 14px; resize: none;" required></textarea>
                    </div>
                </div>
                
                <div class="modal-footer border-0 px-4 py-3 d-flex justify-content-end gap-2" style="background-color: #faf6f0;">
                    <button type="button" class="btn text-white px-4 py-2 fw-bold" onclick="closeEditModal()" style="border-radius: 8px; font-size: 14px; border: none; background-color: #6c757d;">
                        Batal
                    </button>
                    <button type="submit" class="btn text-dark px-4 py-2 fw-bold shadow-sm" style="border-radius: 8px; font-size: 14px; border: none; background-color: #ffc107;">
                        Perbarui Data
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>
