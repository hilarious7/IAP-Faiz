<div class="container py-5">
    <?php $CI =& get_instance(); $session = $CI->session; ?>
    <div class="flash-data" data-flashdata="<?= $session->flashdata('flash'); ?>"></div>
    <?php if ($session->flashdata('flash')) : ?>
        <!-- Flash message handled by JS -->
    <?php endif; ?>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-8 d-flex align-items-center px-0">
            <a href="<?= base_url(); ?>mahasiswa/tambah"
               class="btn btn-gradient-primary shadow rounded-pill px-4 py-2 text-white d-flex align-items-center transition-btn mr-3"
               style="font-size: 1rem; font-weight: 500; background: linear-gradient(90deg, #17a2b8 0%, #007bff 100%); border: none; min-width: 180px;">
                <i class="fas fa-user-plus mr-2" style="font-size: 1.1rem;"></i>
                Tambah Data
            </a>

        </div>
    </div>

    <div class="row mt-4 justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-gradient-info text-white d-flex align-items-center" style="background: linear-gradient(90deg, #17a2b8 0%, #007bff 100%);">
                    <h4 class="mb-0"><i class="fas fa-list"></i> Daftar Mahasiswa</h4>
                </div>
                <div class="card-body bg-light">
                    <?php if (empty($mahasiswa)) : ?>
                        <div class="alert alert-danger text-center" role="alert">
                            <i class="fas fa-exclamation-triangle"></i> Data mahasiswa tidak ditemukan.
                        </div>
                    <?php endif; ?>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-white rounded mb-3 shadow-sm border-0 transition-item">
                                <span class="d-flex align-items-center">
                                    <div class="avatar bg-primary text-white rounded-circle d-flex align-items-center justify-content-center mr-3" style="width:40px;height:40px;">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                    <span class="font-weight-bold"><?= $mhs['nama']; ?></span>
                                </span>
                                <span>
                                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary mr-2 px-3 py-2 shadow-sm transition-btn">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </a>
                                    <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success mr-2 px-3 py-2 shadow-sm transition-btn">
                                        <i class="fas fa-edit"></i> Ubah
                                    </a>
                                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger tombol-hapus px-3 py-2 shadow-sm transition-btn">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </a>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Font Awesome CDN for icons (add in your layout if not already included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
/* Overall Page Styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Button Styles */
.transition-btn {
    transition: transform 0.2s ease, box-shadow 0.3s ease;
}

.transition-btn:hover {
    transform: scale(1.05);
    box-shadow: 0px 8px 12px rgba(0, 123, 255, 0.2);
}

.bg-gradient-info {
    background: linear-gradient(90deg, #17a2b8 0%, #007bff 100%) !important;
}

.avatar {
    font-size: 1.5rem;
    transition: background 0.3s ease;
}

.avatar:hover {
    background-color: #0069d9;
}

/* List Item Styling */
.list-group-item {
    transition: box-shadow 0.3s, transform 0.3s;
}

.list-group-item:hover {
    box-shadow: 0 4px 18px rgba(23, 162, 184, 0.2);
    transform: translateY(-5px) scale(1.02);
}

/* Badge Styling */
.badge {
    font-size: 1rem;
    border-radius: 25px;
    cursor: pointer;
    transition: background 0.3s ease, color 0.3s ease;
}

.badge-primary:hover {
    background: #0056b3;
}

.badge-success:hover {
    background: #28a745;
}

.badge-danger:hover {
    background: #dc3545;
}

/* Card Styling */
.card {
    border-radius: 12px;
}

.card-header {
    font-size: 1.25rem;
}

.card-body {
    background-color: #f8f9fa;
}

/* Hover effects for interactive elements */
.transition-item:hover {
    background-color: #f1f1f1;
    box-shadow: 0 4px 16px rgba(0, 123, 255, 0.1);
}

</style>
