<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$pk = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tubes.css">
    <style>
        .container {
            margin-top: 100px;
            margin-left: 500px;
            width: 100px;
        }

        .container .card {
            padding: 50px;
            padding-left: 60px;
        }
    </style>
    <title>Detail</title>
</head>

<body>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="../assets/img/<?= $pk["Foto"]; ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $pk["Jenis"]; ?></h5>
                <h5 class="card-title"><?= $pk["Merk"]; ?></h5>
                <h5 class="card-title"><?= $pk["Harga"]; ?></h5>
                <a href="../index.php" class="btn btn-primary">kembali</a>
            </div>
        </div>
    </div>
</body>

</html>