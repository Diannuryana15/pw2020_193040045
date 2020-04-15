<?php
// Melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");

// Memilih database
mysqli_select_db($conn, "tubes_193040045") or die("Database salah!");

// query mengambil objek dari tabel didalam database 
$result = mysqli_query($conn, "SELECT * FROM pakaian");

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
        <th>Foto</th>
        <th>Jenis</th>
        <th>Merk</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
<?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td><img src="assets/img/<?= $row["Foto"]; ?>  "width="100"></td>
        <td><?= $row["Jenis"]; ?></td>
        <td><?= $row["Merk"]; ?></td>
        <td><?= $row["Harga"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endwhile; ?> 
    </table>
</body>
</html>