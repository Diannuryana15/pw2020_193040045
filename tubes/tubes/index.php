<?php
require 'php/functions.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT * FROM pakaian WHERE 
          Foto LIKE '%$keyword%'  OR
          Jenis LIKE '%$keyword%' OR
          Merk LIKE '%$keyword%'  OR
          Harga LIKE '%$keyword%' 
           ");
} else {
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tubes.css">
</head>

<body>
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Baju</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="php/admin.php">Login</a>
                    </li>
                </ul>
                <form class="form-inline" method="GET">
                    <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- Card -->
    <div class="container">
        <div class="row pt-5">
            <?php foreach ($pakaian as $pk) : ?>
                <div class="col-sm-3 mb-3">
                    <div class="card mt-3 w-75" style="width: 18rem; height: 320px">
                        <img src="assets/img/<?= $pk['Foto']; ?> " class="card-img-top" style="width: 150px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $pk['Merk']; ?></h5>
                            <a href="php/detail.php?id=<?= $pk['id']; ?>" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>

</html>