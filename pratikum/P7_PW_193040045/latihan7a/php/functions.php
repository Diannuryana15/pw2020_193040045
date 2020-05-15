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

    $query = "INSERT * INTO pakaian VALUES
          ('', '$foto', '$jenis', '$merk', $harga')";

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

    $id = htmlspecialchars($data['id']);
    $foto = htmlspecialchars($data['Foto']);
    $jenis = htmlspecialchars($data['Jenis']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);

    $query = "UPDATE pakaian 
                SET 
                Foto = '$foto'
                Jenis = '$jenis'
                Merk = '$merk'
                Harga = '$harga'
                ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}