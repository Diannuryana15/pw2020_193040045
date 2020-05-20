<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash == hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])); {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
    }

    if (isset($_POST['remember'])) {
      setcookie('username', $row['username'], time() + 60 * 60 * 24);
      $hash = hash('sha256', $row['id']);
      setcookie('hash', $row['hash'], time() + 60 * 60 * 24);
    }
    if (hash('sha256', $row['id']) == $_SESSION['hash']) {
      header("location: admin.php");
      die;
    }
    header("location: index.php");
    die;
  }
  $error = true;
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">
  <title>From Login</title>
</head>

<body>
  <?php if (isset($error)) : ?>
    <p style="color: red; font-style:italic;text-align: center;">Username atau Password salah</p>
  <?php endif ?>
  <div class="login-container d-flex align-items-center justify-content-center">
    <form class="login-form text-center" method="POST">
      <div class="form-group">
        <h3 class="mb-5 font-weight-light text-uppercase">Form Login</h3>
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" name="remember" class="form-check-input">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      <p>Belum punya akun? Registrasi <a href="registrasi.php">disini</a></p>
    </form>
  </div>
</body>

</html>