<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    body {
        background: #f8f9fa;
        min-height: 100vh;
    }
    .card {
        border-radius: 18px;
    }
    .card-header {
        border-top-left-radius: 18px;
        border-top-right-radius: 18px;
        background: #2575fc;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }
    .form-control:focus {
        border-color: #2575fc;
        box-shadow: 0 0 0 0.2rem rgba(37,117,252,.25);
    }
    .btn-success {
        background: linear-gradient(90deg, #43e97b 0%, #38f9d7 100%);
        border: none;
        color: #fff;
        font-weight: bold;
        transition: background 0.3s;
    }
    .btn-success:hover {
        background: linear-gradient(90deg, #38f9d7 0%, #43e97b 100%);
        color: #fff;
    }
    .form-group label i {
        color: #2575fc;
        margin-right: 4px;
    }
</style>

<div class="container" style="margin-top:40px;">

    <div class="row justify-content-center">
        <div class="col-md-7">

            <div class="card shadow-lg border-0">
                <div class="card-header text-white text-center">
                    <h4 class="mb-0"><i class="fas fa-user-plus"></i> Form Tambah Data Mahasiswa</h4>
                </div>
                <div class="card-body bg-white">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama"><i class="fas fa-user"></i> Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama lengkap">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nrp"><i class="fas fa-id-card"></i> NRP</label>
                            <input type="text" name="nrp" class="form-control" id="nrp" placeholder="Masukkan NRP">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="fas fa-envelope"></i> Email</label>
                            <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan"><i class="fas fa-graduation-cap"></i> Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="">-- Pilih Jurusan --</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-success btn-block shadow-sm">
                            <i class="fas fa-plus-circle"></i> Tambah Data
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- Font Awesome CDN -->
<script src="https://kit.fontawesome.com/yourfontawesomekit.js" crossorigin="anonymous"></script>