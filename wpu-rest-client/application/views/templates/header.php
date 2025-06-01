<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <style>
    body {
      background: #f8fafc;
    }
    .navbar {
      background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%);
      box-shadow: 0 2px 8px rgba(0,0,0,0.07);
    }
    .navbar-brand {
      font-weight: bold;
      color: #fff !important;
      letter-spacing: 2px;
      display: flex;
      align-items: center;
    }
    .navbar-brand img {
      height: 32px;
      margin-right: 10px;
    }
    .navbar-nav .nav-link {
      color: #fff !important;
      margin-right: 10px;
      transition: color 0.2s;
      font-weight: 500;
      border-radius: 4px;
      padding: 8px 16px;
    }
    .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
      background: rgba(255,255,255,0.15);
      color: #ffe082 !important;
    }
  </style>

  <title><?php echo $judul; ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/api-settings.png" alt="Logo">
        REST API
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link <?= ($judul == 'Home') ? 'active' : '' ?>" href="<?= base_url(); ?>home">Home</a>
          <a class="nav-item nav-link <?= ($judul == 'Mahasiswa') ? 'active' : '' ?>" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
          <a class="nav-item nav-link <?= ($judul == 'About') ? 'active' : '' ?>" href="<?= base_url(); ?>about">About</a>
        </div>
      </div>
    </div>
  </nav>