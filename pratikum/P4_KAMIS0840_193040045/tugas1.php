<?php

$pakaian = [

         ['foto'            => 'images.jpeg',
         'Jenis'            => 'Batik',
         'Merk'             => 'Alisan',
         'Harga'            => 'IDR = 150.000'],

         ['foto'            => 'images1.jpeg',
         'Jenis'            => 'T-shirt',
         'Merk'             => 'Adidas',
         'Harga'            => 'IDR = 60.000'],

         ['foto'            => 'images2.jpeg',
         'Jenis'            => 'Batik',
         'Merk'             => 'Mega Mendung',
         'Harga'            => 'IDR = 120.000'],
         
         ['foto'            => 'images3.png',
         'Jenis'            => 'Kaos Lengan Panjang',
         'Merk'             => 'Bluza',
         'Harga'            => 'IDR = 100.000'],
         
         ['foto'            => 'images4.png',
         'Jenis'            => 'Kaos Lengan Panjang',
         'Merk'             => 'Monstax',
         'Harga'            => 'IDR = 100.000'],
         
         ['foto'            => 'images5.png',
         'Jenis'            => 'Kaos Lengan Panjang',
         'Merk'             => 'Almana',
         'Harga'            => 'IDR = 110.000'],
         
         ['foto'            => 'images6.png',
         'Jenis'            => 'Kemeja',
         'Merk'             => 'Alisan',
         'Harga'            => 'IDR = 120.000'],
         
         ['foto'            => 'images7.png',
         'Jenis'            => 'Kemeja',
         'Merk'             => 'Mockup',
         'Harga'            => 'IDR = 100.000'],
         
         ['foto'            => 'images8.png',
         'Jenis'            => 'Blus Kerah Dress',
         'Merk'             => 'Rose',
         'Harga'            => 'IDR = 150.000'],
         
         ['foto'            => 'images9.png',
         'Jenis'            => 'T-shirt',
         'Merk'             => 'Bss',
         'Harga'            => 'IDR = 150.000'],
        
         
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Pakaian Dian</title>
    <style>
        body {
            background-color: blue;
        }
    </style>
</head>
<body>
    <table border = "1" cellspacing = "0" cellpadding = "5" style ="text-align: center;">
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Jenis</th>
        <th>Merk</th>
        <th>Harga</th>
       </tr>

    <?php $no =1; ?>

    <?php foreach ($pakaian as $a) { ?>
    <tr>
        <td><?= $no ?></td>
        <td><img src="img/<?= $a["foto"]?>" height="450px"></td>
        <td><?= $a["Jenis"] ?></td>
        <td><?= $a["Merk"] ?></td>
        <td><?= $a["Harga"] ?></td>
    </tr>

        <?php $no++; ?>

    <?php }?>
    </table>

</body>
</html>