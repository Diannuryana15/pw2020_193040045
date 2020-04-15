<?php 
// ARRAY 
// Variabel jamak yang bisa di isi banyak nilai
// Pasangan antara KEY & VALUE


// Array Numerik
// Array yang KEYnya adalah ANGKA, disebut juga INDEX
// INDEX selalu dimulai dari 0

$mhs =['Sandika','Doddy','Erik'];
echo $mhs[1];
'<br>';
print_r($mhs);
echo'<hr>';

// ARRAY ASSOCIATIVE
// Array yang KEYnya adalah STRING
// Dibuat oleh Programmer

$buku = ['Judul' => 'Harry Potter and The Sorcerers Stone',
        'Pengarang' => 'J.K.Rowling',
        'Penerbit' => 'Gramedia',
        'Genre' => 'SciFI'];


echo $buku['Penerbit'];