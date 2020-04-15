<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "tubes_193040045");

// ambil data dari tabel pakaian / query data pakaian
$result = mysqli_query($conn, "SELECT * FROM pakaian");

// ambil data (fetch) pakaian dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associatif
// mysqli_fetch_array() // mengembalikan kedua duannya
// mysqli_fetch_object() //

// while ($pk = mysqli_fetch_assoc($result) ) {
// var_dump($pk);
// }
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
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
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
<?php endwhile; ?> 
    </table>
</body>
</html>