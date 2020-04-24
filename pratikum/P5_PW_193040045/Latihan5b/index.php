<?php
// Menghubungkan dengan file php lainnya
require 'php/functions.php';

// Melakukan query
$pakaian = query("SELECT * FROM pakaian")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Toko Pakaian</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5b</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Foto</th>
        <th>Jenis</th>
        <th>Merk</th> 
        <th>Harga</th>
    </tr>
    <?php $i = 1 ?>
<?php foreach ($pakaian as $pk) :?>
    <tr>
        <td><?= $i ?></td>
        <td><img src="assets/img/<?= $pk["Foto"]; ?>  "width="100"></td>
        <td><?= $pk["Jenis"]?></td>
        <td><?= $pk["Merk"]?></td>
        <td><?= $pk["Harga"] ?></td>
    </tr>
    <?php $i++ ?>
            <?php endforeach; ?> 
        </table>
    </body>
</html>