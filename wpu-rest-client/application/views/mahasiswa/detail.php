<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-7">
            <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-gradient bg-primary text-white text-center py-4">
                    <h4 class="mb-0 fw-bold letter-spacing-1">Detail Data Mahasiswa</h4>
                </div>
                <div class="card-body text-center bg-light">
                    <div class="d-inline-block mb-3">
                        <img src="https://ui-avatars.com/api/?name=<?= urlencode($mahasiswa['nama']); ?>&background=0D8ABC&color=fff&size=120" 
                             alt="Foto Profil" class="rounded-circle shadow border border-3 border-white" width="120" height="120">
                    </div>
                    <h5 class="card-title fw-semibold mt-2"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email']; ?></h6>
                    <span class="badge bg-gradient bg-info text-dark px-3 py-2 fs-6 mb-2 shadow-sm"><?= $mahasiswa['jurusan']; ?></span>
                    <div class="d-flex justify-content-center align-items-center gap-2 mt-3">
                        <span class="fw-bold text-secondary">NRP:</span>
                        <span class="fs-5"><?= $mahasiswa['nrp']; ?></span>
                    </div>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary mt-4 px-4 py-2 rounded-pill shadow-sm">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Optional: Bootstrap Icons CDN for arrow icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<style>
    .letter-spacing-1 { letter-spacing: 1px; }
    .bg-gradient { background: linear-gradient(90deg, #0d8abc 0%, #3a8dde 100%) !important; }
</style>
