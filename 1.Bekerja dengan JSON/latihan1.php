<!-- json dengan PHP -->

<?php
  $data = file_get_contents('data/pizza.json');
  $menu = json_decode($data, true);  /* json_decode , merubah json menjadi array  */
  
  // var_dump($menu['menu'][4]['nama']) -> hasilnya: string(14) "Beef Spaghetti"

  $menu = $menu["menu"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Dheo - HUT</title>
  </head>
  <body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="120"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home</a>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->

<!-- Body -->
<div class="container">

  <div class="row mt-3">
    <div class="col">
      <h1>All Menu</h1>
    </div>
  </div>

  <!-- Menu -->
  <div class="row">
    <?php foreach( $menu  as $m ): ?>
      <div class="col-md-4">

        <!-- Card -->
        <div class="card mb-3">
          <img class="card-img-top" src="img/data/<?= $m["gambar"]?>">
          <div class="card-body">
            <h5 class="card-title"><?= $m["nama"]?></h5>
            <p class="card-text"><?= $m["deskripsi"]?></p>
            <h5 class="card-title">Rp. <?= number_format($m["harga"], 0,',','.');?></h5>
            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
          </div>
        </div>
        <!-- End Card -->

      </div>
    <?php endforeach; ?>
  </div>
  <!-- End Menu -->

</div>
<!-- End Body -->











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>