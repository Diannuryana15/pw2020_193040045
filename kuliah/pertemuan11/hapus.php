<?php
require 'functions.php';

// mengambil id dari URL
$id = $_GET['id'];


if (hapus($id) > 0) {
  echo "<script>
      alert('Data Berhasil Dihapus');
      document.location.href = 'index.php';
      </script>";
} else {
  echo
    alert('Data Gagal Ditambahkan');
}