<?php
session_start();
require 'functions.php';

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}

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
  <link rel="stylesheet" href="../css/tubes.css">
  <title>Admin</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        <form class="form-inline" method="GET">
          <input class="form-control mr-sm-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" name="cari" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <table class="table table-bordered">
    <tr>
      <th>#</th>
      <th scope="col">Opsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Jenis</th>
      <th scope="col">Merk</th>
      <th scope="col">Harga</th>
    </tr>
    <?php if (empty($pakaian)) : ?>
      <tr>
        <td colspan="4">
          <h1>data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php $i = 1; ?>
      <?php foreach ($pakaian as $pk) : ?>
        <tr>
          <td><?= $i++ ?></td>
          <td>
            <a href="ubah.php?id=<?= $pk['id']; ?>">Ubah</a>
            <a href="hapus.php?id=<?= $pk['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini??')">Hapus</a>
          </td>
          <td><img src="../assets/img/<?= $pk['Foto']; ?>" width="100"></td>
          <td><?= $pk['Jenis']; ?></td>
          <td><?= $pk['Merk']; ?></td>
          <td><?= $pk['Harga']; ?></td>
        </tr>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>