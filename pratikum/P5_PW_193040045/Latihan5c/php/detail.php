<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$pk = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Toko Pakaian</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5c</title>
    <link rel="stylesheet" href="../css/detail.css">
<head>
<body>
    <div class="container">
        <div class="Foto">
            <img src="../assets/img/<?= $pk["Foto"];?>"alt="">
        </div>
        <div class="Keterangan">
        <p><?= $pk["Foto"]; ?></p>
        <p><?= $pk["Jenis"]; ?></p>
        <p><?= $pk["Merk"]; ?></p>
        <p><?= $pk["Harga"]; ?></p>
            </div>
            <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
        </div>
    </body>
</html>