<div class="modal fade" id="modal-hapus-kegiatan" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 1050;">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content border-0 shadow-lg" style="background-color: #faf6f0; border-radius: 12px; overflow: hidden;">
            
            <div class="modal-header text-white border-0 px-4 py-3 d-flex justify-content-between align-items-center" style="background-color: #5c4033;">
                <h5 class="modal-title fw-bold m-0" style="font-size: 14px; letter-spacing: 0.5px;">KONFIRMASI HAPUS KEGIATAN</h5>
                <button type="button" onclick="closeHapusModal()" style="background: none; border: none; color: #dfdfdf; font-size: 24px; cursor: pointer; line-height: 1;">&times;</button>
            </div>
            
            <form id="form-hapus-kegiatan" action="" method="POST" class="m-0">
                @csrf
                @method('DELETE')
                
                <div class="modal-body p-4 text-start">
                    <p class="text-dark m-0" style="font-size: 14px; line-height: 1.6;">
                        Apakah Anda yakin ingin menghapus kegiatan <strong id="hapus-nama-kegiatan" class="text-danger"></strong>?<br>
                        Data yang sudah dihapus tidak dapat dikembalikan lagi.
                    </p>
                </div>
                
                <div class="modal-footer border-0 px-4 py-3 d-flex justify-content-end gap-2" style="background-color: #faf6f0;">
                    <button type="button" class="btn text-white px-4 py-2 fw-bold" onclick="closeHapusModal()" style="border-radius: 8px; font-size: 14px; border: none; background-color: #6c757d;">
                        Batal
                    </button>
                    <button type="submit" class="btn text-white px-4 py-2 fw-bold shadow-sm" style="border-radius: 8px; font-size: 14px; border: none; background-color: #dc3545;">
                        Ya, Hapus Acara
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>