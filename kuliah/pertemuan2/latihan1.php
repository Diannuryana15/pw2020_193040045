<?php 
// mencetak tulisan ke layar 
echo '<h1>Hello World!!';
echo '<hr>';

echo (1 + 2) * (3 - 4);
echo '<hr>';

// variabel 
// tempat untuk menyimpan nilai 
$nama = 'DianNuyana';
$email = 'diantaurus123@gmail.com';
echo $email;
echo $nama;


//  OPERATOR
//  Operator Aritmatika / Matematika
//  +, -, *, /, %
echo 10 % 9;
echo '<hr>';

// Operator Assigment / Penugasan
// =, +
$x = 1;
$y = 2;
$z = $x;
echo $z;
echo '<hr>';

$a = 1;
$a -= 5;
echo $a;
echo '<hr>';

// Operator incermant / decrement 
// ++, --
$x = 1;
$x++;
$x--;
++$x;
echo '<hr>';

// Operator String / Concat / Penggabungan String 
//.
$nama_depan = 'Dian';
$nama_belakang = 'Nuryana';
echo $nama_depan .' '. $nama_belakang;




// Standar Output
// echo, print 
// '', ""
// escape character '\'
$salam = "assalamu'alaikum";
// $percakapan = 'A "' . $salam . '"';
$percakapan = ": \"Assalamu'alaikum\"";
echo $percakapan;



?>