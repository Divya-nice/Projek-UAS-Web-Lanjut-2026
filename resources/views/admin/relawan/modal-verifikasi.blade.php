<div class="modal fade" id="modal-verifikasi-relawan" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 1050;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content border-0 shadow-lg" style="background-color: #faf6f0; border-radius: 12px; overflow: hidden;">
            
            <div class="modal-header text-white border-0 px-4 py-3 d-flex justify-content-between align-items-center" style="background-color: #5c4033;">
                <h5 class="modal-title fw-bold m-0" style="font-size: 14px; letter-spacing: 0.5px;">VERIFIKASI: DETAIL DATA PERMOHONAN RELAWAN</h5>
                <button type="button" onclick="closeVerifikasiModal()" style="background: none; border: none; color: #dfdfdf; font-size: 24px; cursor: pointer; line-height: 1;">&times;</button>
            </div>
            
            <div class="modal-body p-4 text-start" style="max-height: 65vh; overflow-y: auto;">
                <table class="table table-borderless align-top m-0" style="font-size: 14px; color: #333333;">
                    <tr>
                        <td width="25%" class="fw-bold py-2">* Nama Lengkap Relawan</td>
                        <td width="2%" class="py-2">:</td>
                        <td id="detail-nama" class="py-2"></td>
                    </tr>
                    <tr>
                        <td class="fw-bold py-2">* Email</td>
                        <td class="py-2">:</td>
                        <td id="detail-email" class="py-2"></td>
                    </tr>
                    <tr>
                        <td class="fw-bold py-2">* Nomor Telepon/WA</td>
                        <td class="py-2">:</td>
                        <td id="detail-telepon" class="py-2"></td>
                    </tr>
                    <tr>
                        <td class="fw-bold py-2">* Alamat Rumah</td>
                        <td class="py-2">:</td>
                        <td id="detail-alamat" class="py-2"></td>
                    </tr>
                    <tr>
                        <td class="fw-bold py-2">* Pilihan Kegiatan</td>
                        <td class="py-2">:</td>
                        <td id="detail-kegiatan" class="py-2 fw-semibold text-success"></td>
                    </tr>
                </table>

                <div class="mt-4">
                    <label class="fw-bold text-dark mb-2" style="font-size: 14px;">* Alasan Ingin Bergabung :</label>
                    <textarea id="detail-alasan" rows="4" class="form-control" style="border-radius: 8px; border: 1px solid #cccccc; padding: 12px; font-size: 14px; background-color: #ffffff; resize: none;" readonly></textarea>
                </div>
            </div>
            
            <div class="modal-footer border-0 px-4 py-3 d-flex justify-content-between align-items-center" style="background-color: #f7f4ee;">
                <button type="button" class="btn text-white px-4 py-2 fw-bold" onclick="closeVerifikasiModal()" style="border-radius: 8px; font-size: 14px; background-color: #6c757d; border: none;">
                    Tutup
                </button>
                
                <form id="form-keputusan-admin" action="" method="POST" class="m-0 d-flex gap-2">
                    @csrf
                    @method('PATCH')
                    
                    <button type="submit" name="keputusan" value="Tolak" class="btn text-white px-4 py-2 fw-bold shadow-sm" style="border-radius: 8px; font-size: 14px; background-color: #dc3545; border: none;">
                        Tolak Pendaftaran
                    </button>
                    
                    <button type="submit" name="keputusan" value="Terima" class="btn text-white px-4 py-2 fw-bold shadow-sm" style="border-radius: 8px; font-size: 14px; background-color: #198754; border: none;">
                        Terima Jadi Relawan
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>