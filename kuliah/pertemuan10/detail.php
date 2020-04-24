<?php
require 'functions.php';

$id = $_GET['id'];

$m = query("SELECT * FROM mahasiswa WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>

<body>
    <H3>DETAIL MAHASISWA</H3>
    <ul>
        <img src="img/<?= $m['gambar']; ?>" width="200">
        <li>Nrp : <?= $m['nrp']; ?></li>
        <li>Nama : <?= $m['nama']; ?></li>
        <li>Email : <?= $m['email']; ?></li>
        <li>Jurusan : <?= $m['jurusan']; ?></li>
        <li><a href="">ubah</a> | <a href="">hapus</a></li>
        <li><a href="latihan3.php">kembali ke daftar mahasiswa</a></li>
    </ul>
</body>

</html>