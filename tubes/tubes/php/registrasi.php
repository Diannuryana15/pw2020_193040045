<?php
require 'functions.php';
if (isset($_POST['register'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Register berhasil');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
    alert('Register gagal');
    document.location.href = 'login.php';
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/login.css">

  <title>Document</title>
</head>

<body>

  <div class="register-container d-flex align-items-center justify-content-center">
    <form class="register-form text-center" method="POST">
      <div class="form-group">
        <h3 class="mb-5 font-weight-light text-uppercase">Form registrasi</h3>
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="register" class="btn btn-primary">Register</button>
    </form>
  </div>
</body>

</html>