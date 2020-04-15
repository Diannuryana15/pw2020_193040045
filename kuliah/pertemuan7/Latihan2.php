<?php
// Array Numerik
// Array Assosiatif
$mhs = [
 ['nama'=>'Dian Nuryana',
  'nrp'=>'193040045', 
  'email'=>'diantaurus123@gmail.com',
  'jurusan'=>'Teknik Informatika'],
 ['nama'=>'Aji Nuansa',
  'nrp'=>'193040046', 
  'email'=>'AjiFzee@gmail.com',
  'jurusan'=>'Teknik Informatika'],
 ['nama'=>'Reyhan Abdhul Huda',
  'nrp'=>'193040044',
  'email'=>'Raysianakcirebon@gmail.com',
  'jurusan'=>'Teknik Informatika'],
 ['nama'=>'Muhammad Angga',
 'nrp'=>'193040070',
  'email'=>'MuhammadAngga@gmail.com',
 'jurusan'=>'Teknik Informatika'],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

<?php foreach($mhs as $m) { ?>
    <ul>
    <li>Nama : <?php echo $m['nama']; ?></li>
    <li>NRP : <?php echo $m['nrp']; ?></li>
    <li>E-mail : <?php echo $m['email'];; ?></li>
    <li>Jurusan : <?php echo $m['jurusan'];; ?></li>
    </ul>
<?php } ?>
</body>
</html>