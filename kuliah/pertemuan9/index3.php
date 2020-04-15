<?php
require 'functions.php';
$pk = query("SELECT * FROM pakaian");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Toko Pakaian</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Foto</th>
        <th>Jenis</th>
        <th>Merk</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
<?php foreach($pk as $row) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
        </td>
        <td><img src="assets/img/<?= $row["Foto"]; ?>  "width="100"></td>
        <td><?= $row["Jenis"]; ?></td>
        <td><?= $row["Merk"]; ?></td>
        <td><?= $row["Harga"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?> 
    </table>
</body>
</html>