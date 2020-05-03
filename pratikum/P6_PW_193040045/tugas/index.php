<?php
require 'php/functions.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT *  FROM pakaian WHERE 
          Foto LIKE '%keyword%' 
          Jenis LIKE '%keyword%'
          Merk LIKE '%keyword%'
          Harga LIKE '%keyword%'
           ");
}
$pakaian = query("SELECT * FROM pakaian");
?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <h1>Toko Pakaian</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <head>

    <body>
        <div class="container">
            <form action="" method="GET">
                <input type="text" name="keyword">
                <button type="submit" name="cari">Cari</button>
            </form>
            <?php if (empty($pakaian)) : ?>
                <h1>data tidak ditemukan</h1>
            <?php else : ?>
                <?php foreach ($pakaian as $pk) : ?>
                    <p class="Merk">
                        <a href="php/detail.php?id=<?= $pk['id'] ?>">
                            <?= $pk["Merk"] ?>
                        </a>
                    </p>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <a href="php/admin.php">
            <button type="">
                Masuk ke halaman admin
            </button>
        </a>
    </body>

</html>