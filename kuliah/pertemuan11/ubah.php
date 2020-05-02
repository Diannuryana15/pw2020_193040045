<?php
require 'functions.php';
//jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("location: index.php");
  exit;
}
//ambil id dari url
$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
      alert('Data Berhasil Diubah');
      document.location.href = 'index.php';
      </script>";
  } else {
    echo "<script>
      alert('Data Gagal Diubah');
      document.location.href = 'index.php';
      </script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UBAH DATA MAHASISWA</title>
</head>

<body>
  <h3>Form Ubah Data Mahasisawa</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" autofocus required value="<?= $m['id']; ?>">
    <ul>
      <li>
        <label>
          Gambar :
          <input type="text" name="gambar" autofocus required value="<?= $m['gambar']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nrp :
          <input type="text" name="nrp" required value="<?= $m['nrp']; ?>">
        </label>
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="nrp" required value="<?= $m['nama']; ?>">
        </label>
      </li>
      <li>
        <label>
          Email
          <input type="text" name="email" required value="<?= $m['email']; ?>">
        </label>
      </li>
      <li>
        <label>
          Jurusan
          <input type="text" name="jurusan" required value="<?= $m['jurusan']; ?>">
        </label>
      </li>
      <li>
        <button type="submit" name="ubah">Ubah Data!!</button>
      </li>

    </ul>
  </form>
</body>

</html>