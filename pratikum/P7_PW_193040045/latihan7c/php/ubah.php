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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data</title>
</head>

<body>
  <h3>Form Tambah Ubah Pakaian</h3>
  <form action="" method="post">
    <input type="hidden" name="id" value="<?= $pk['id']; ?>">
    <table>
      <tr>
        <td>
          <label for="Foto">Foto</label>
        </td>
        <td>
          <input type="text" name="Foto" value="<?= $pk['Foto']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Jenis">Jenis Pakaian</label>
        </td>
        <td>
          <input type="text" name="Jenis" value="<?= $pk['Jenis']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Merk">Merk Pakaian</label>
        </td>
        <td>
          <input type="text" name="Merk" value="<?= $pk['Merk']; ?>">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Harga">Harga Pakaian</label>
        </td>
        <td>
          <input type="text" name="Harga" value="<?= $pk['Harga']; ?>">
        </td>
      </tr>
    </table>
    <button type="submit" name="ubah">Ubah Data Pakaian</button>
  </form>
</body>

</html>