<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data Pakaian</h3>
  <form action="" method="post">
    <table>
      <tr>
        <td>
          <label for="Foto">Foto</label>
        </td>
        <td>
          <input type="text" name="Foto" id="Foto" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Jenis">Jenis Pakaian</label>
        </td>
        <td>
          <input type="text" name="Jenis" id="Jenis" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Merk">Merk Pakaian</label>
        </td>
        <td>
          <input type="text" name="Merk" id="Merk" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="Harga">Harga Pakaian</label>
        </td>
        <td>
          <input type="text" name="Harga" id="Harga" required>
        </td>
      </tr>
    </table>
    <button type="submit" name="tambah">Tambah Data Pakaian</button>
  </form>
</body>

</html>