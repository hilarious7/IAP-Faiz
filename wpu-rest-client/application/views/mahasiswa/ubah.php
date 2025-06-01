<div class="container py-5" style="background: #f8fafc; min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="fas fa-user-edit mr-2"></i>Form Ubah Data Mahasiswa</h4>
                </div>
                <div class="card-body p-4">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama"><i class="fas fa-user mr-1"></i>Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp"><i class="fas fa-id-card mr-1"></i>NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp" value="<?= $mahasiswa['nrp']; ?>">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope mr-1"></i>Email</label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan"><i class="fas fa-graduation-cap mr-1"></i>Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach( $jurusan as $j ) : ?>
                                    <option value="<?= $j; ?>" <?= $j == $mahasiswa['jurusan'] ? 'selected' : ''; ?>><?= $j; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-success btn-block mt-4">
                            <i class="fas fa-save mr-1"></i>Ubah Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Font Awesome CDN for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
