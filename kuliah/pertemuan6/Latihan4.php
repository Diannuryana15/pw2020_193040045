<?php
// Array Numerik
// Array Assosiatif
$mhs = [
 ['Dian Nuryana', '193040045', 'diantaurus123@gmail.com',
'Teknik Informatika'],
['Aji Nuansa', '193040046', 'AjiFzee@gmail.com',
'Teknik Informatika'],
['Reyhan Abdhul Huda', '193040044', 'Raysianakcirebon@gmail.com',
'Teknik Informatika'],
['Muhammad Angga', '193040070', 'MuhammadAngga@gmail.com',
'Teknik Informatika'],
['Tresna Eka', '193040071', 'EkaNagi@gmail.com',
'Teknik Informatika'],
['Suhendani', '193040042', 'GapernahPulang@gmail.com',
'Teknik Informatika']
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
    <li>Nama : <?php echo $m[0]; ?></li>
    <li>NRP : <?php echo $m[1]; ?></li>
    <li>E-mail : <?php echo $m[2];; ?></li>
    <li>Jurusan : <?php echo $m[3];; ?></li>
    </ul>
<?php } ?>
</body>
</html>