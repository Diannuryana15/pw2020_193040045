<?php
require 'functions.php';

$pakaian = query("SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>
  <a href="tambah.php">
    <button type="submit">Tambah Data</button>
  </a>

  <table border="1" style="text-align: center;">
    <tr>
      <th>#</th>
      <th>Opsi</th>
      <th>Foto</th>
      <th>Jenis</th>
      <th>Merk</th>
      <th>Harga</th>
    </tr>

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
  </table>
</body>

</html>