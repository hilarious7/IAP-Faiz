<?php
$data = file_get_contents('data/pizza.json');
$menu = json_decode($data, true);

$menu = $menu['menu'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <title>WPU Hut</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container">

        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="120" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">All Menu</a>
            
          </div>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-3">
      <div class="col">
        <h1>All Menu</h1>
      </div>
    </div> 

    <div class="row">
      <?php foreach ($menu as $row) : ?>
      <div class="col-md-4 mb-4">
      <div class="card h-100" style="max-width: 20rem;">
        <img src="img/menu/<?= $row['gambar']; ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body">
        <h5 class="card-title"><?= $row['nama']; ?></h5>
        <p class="card-text"><?= $row['deskripsi']; ?></p>
        <h5 class="card-title">Rp. <?= $row['harga']; ?></h5>
        <a href="#" class="btn btn-primary">Order Now</a>
        </div>
      </div>
      </div>
      <?php endforeach; ?>
    </div>
          
</div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>
