<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}


require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST)) {
    echo "<script>
    alert('Data berhasil ditambahkan!!');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal ditambahkan!!');
    document.location.href = 'admin.php';
    </script>";
  }
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
  <link rel="stylesheet" href="../css/login.css">
  <title>From Tambah</title>
</head>


<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <div class="container">
      <h3>Form Tambah Data</h3>
      <div class="form-group row">
        <label for="Jenis" class="col-sm-2 col-form-label "><b>Jenis Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Jenis" class="form-control" id="Jenis" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="Merk" class="col-sm-2 col-form-label "><b>Merk Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Merk" class="form-control" id="Merk" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="Harga" class="col-sm-2 col-form-label "><b>Harga Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Harga" class="form-control" id="Harga" required>
        </div>
        <br>
        <div class="form-group row mt-4 ml-2">
          <label for="Foto" class="col-sm-2 col-form-label "><b>Foto Pakaian</b></label>
          <input type="file" name="Foto" class="Foto" onchange="previewImage()">
          </label>
          <img src="img/nophoto.png" width="60" style="display: block;" class="img-preview">
        </div>
      </div>
      <button type="submit" name="tambah" class="tambah">Tambah Data</button>
  </form>
  <script src="../js/scrips.js"></script>
</body>

</html>