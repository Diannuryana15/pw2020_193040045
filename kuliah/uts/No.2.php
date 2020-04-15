<?php
$mhs = [
    [
     'no'=>'1',
     'nama'=>'Sandika Galih',
     'nrp'=>'043040023', 
     'email'=>'Sandikagalih@unpas.ac.id',
     'jurusan'=>'Teknik Informatika'],

    [
     'no'=>'2',  
     'nama'=>'Doddy Ferdiansyah',
     'nrp'=>'14404004', 
     'email'=>'doddy@gmail.com',
     'jurusan'=>'Teknik Mesin'],]
        
     ?> 

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Daftar Mahasiswa</title>
   </head>
   <body>
   
   <?php foreach($mhs as $m) { ?>
       <ul>
       <li><?php echo $m['no']; ?></li>
       <li>Nama : <?php echo $m['nama']; ?></li>
       <li>NRP : <?php echo $m['nrp']; ?></li>
       <li>E-mail : <?php echo $m['email'];; ?></li>
       <li>Jurusan : <?php echo $m['jurusan'];; ?></li>
       </ul>
   <?php } ?>
   </body>
   </html>
