<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Daftar Msahasiswa</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>nama</th>
        <th>nrp</th>
        <th>email</th>
        <th>jurusan</th>
        <th>gambar</th>
    </tr>
    <?php $i = 1; ?>
<?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>  "width="100"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?> 
    </table>
</body>
</html>