<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("location: login.php");
}

$id = $_GET['id'];
if (hapus($id) > 0) {
  echo "<script>
    alert('Data berhasil dihapus');
    document.location.href = 'admin.php';
    </script>";
} else {
  "<script>
    alert('Data gagal dihapus');
    document.location.href = 'admin.php';
    </script>";
}
