<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel pakaian / query data pakaian
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

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
<h1>Daftar Mahasiswa</h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>gambar</th>
        <th>nrp</th>
        <th>nama</th>
        <th>email</th>
        <th>jurusan</th>
    </tr>
    <?php $i = 1; ?>
<?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>  "width="100"></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endwhile; ?> 
    </table>
</body>
</html>