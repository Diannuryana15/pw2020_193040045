<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040045") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $sql);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['Foto']);
    $jenis = htmlspecialchars($data['Jenis']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);

    $query = " INSERT INTO pakaian
                VALUES
                (null, '$foto', '$jenis', '$merk','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto = htmlspecialchars($data['Foto']);
    $jenis = htmlspecialchars($data['Jenis']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "UPDATE pakaian 
                SET 
                Foto = '$foto',
                Jenis = '$jenis',
                Merk = '$merk',
                Harga = '$harga'
                WHERE id = '$id' ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = 'username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
    alert('Username sudah digunakan');
    </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO user VALUES(null, '$username', '$password')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
