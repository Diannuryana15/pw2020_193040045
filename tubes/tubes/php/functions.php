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

function upload()
{
    $nama_file = $_FILES['Foto']['name'];
    $tipe_file = $_FILES['Foto']['type'];
    $ukuran_file = $_FILES['Foto']['size'];
    $error = $_FILES['Foto']['error'];
    $tmp_file = $_FILES['Foto']['tmp_name'];



    // ketika tidak ada Foto yang dipilih
    if ($error == 4) {
        // echo "<script> 
        // alert('pilih Foto terlebih dahulu!');
        // </script>";
        return 'nophoto.png';
    }

    // cek ekstensi file
    $daftar_foto = ['jpg', 'png', 'jpeg', 'jfif'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_foto)) {
        echo "<script> 
    alert('Pilih file Foto');
    </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script> 
            alert('File bukan Foto');
          </script>";
        return false;
    }
    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script> 
            alert('File Foto terlalu besar');
          </script>";
        return false;
    }
    //lolos pengecekan
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}



function tambah($data)
{
    $conn = koneksi();

    // $foto = htmlspecialchars($data['Foto']);
    $jenis = htmlspecialchars($data['Jenis']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);


    // upload gambar
    $foto = upload();
    if (!$foto) {
        return false;
    }

    $query = " INSERT INTO pakaian
                VALUES
                (null, '$foto', '$jenis', '$merk','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    $pk = query("SELECT * FROM pakaian WHERE id = $id");
    if ($pk['Foto'] != 'nophoto.png') {
        unlink('../assets/img/' . $pk['Foto']);
    }


    mysqli_query($conn, "DELETE FROM pakaian WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $foto_lama = htmlspecialchars($data['Foto_lama']);
    $jenis = htmlspecialchars($data['Jenis']);
    $merk = htmlspecialchars($data['Merk']);
    $harga = htmlspecialchars($data['Harga']);

    $foto = upload();
    if (!$foto) {
        return false;
    }

    if ($foto == 'nophoto.png') {
        $foto = $foto_lama;
    }

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
