<?php
require 'php/functions.php';

$pakaian = query("SELECT * FROM pakaian")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<h1>Toko Pakaian</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5c</title>
<head>
<body>
    <div class="container">
            <?php foreach ($pakaian as $pk) :?>
                    <p class="Merk">
                    <a href="php/detail.php?id=<?= $pk['id'] ?>"> 
                        <?= $pk["Merk"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
    </div>
    </body>
</html>