<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}


require 'functions.php';
$id = $_GET['id'];
$pk = query("SELECT * FROM pakaian WHERE id = $id")[0];
if (isset($_POST['ubah'])) {
  if (ubah($_POST)) {
    echo "<script>
    alert('Data berhasil diubah!!');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "<script>
    alert('Data gagal diubah!!');
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
  <title>From Ubah</title>
</head>

<body>
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $pk['id']; ?>">
    <div class="container">
      <h3>Form Ubah Data</h3>

      <div class="form-group row">
        <label for="Jenis" class="col-sm-2 col-form-label "><b>Jenis Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Jenis" value="<?= $pk['Jenis']; ?>" class="form-control" id="Jenis" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="Merk" class="col-sm-2 col-form-label "><b>Merk Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Merk" value="<?= $pk['Merk']; ?>" class="form-control" id="Merk" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="Harga" class="col-sm-2 col-form-label "><b>Harga Pakaian</b></label>
        <div class="col-lg-9">
          <input type="text" name="Harga" value="<?= $pk['Harga']; ?>" class="form-control" id="Harga" required>
        </div>
        <br>
        <div class="form-group row mt-4 ml-2">
          <input type="hidden" name="Foto_lama" value="<?= $pk['Foto']; ?>">
          <label for="Foto" class="col-sm-2 col-form-label "><b>Foto Pakaian</b></label>
          <input type="file" name="Foto" value="<?= $pk['Foto']; ?>" class="Foto" onchange="previewImage()">
          </label>
          <img src="../assets/img/<?= $pk['Foto']; ?>" width="60" style="display: block;" class="img-preview">
        </div>
      </div>
      <button type="submit" name="ubah" class="ubah">Ubah Data</button>
  </form>
  <script src="../js/scrips.js"></script>
</body>

</html>