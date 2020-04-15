<?php
// Membuat Array
// Cara Lama 
$mhs = array('Shandika', 'Galih', 'Doddy', 'Erik', 'Fajar');

// Cara Baru 
$angka = [3, 10, 200];
$myarray = ['pemrograman web', 300, false];

// Mencetak Array 
// Bisa cetak elemen pada array 
echo $mhs[2];
echo '<br>';
echo $myarray[1];
echo '<hr>';

// Mencetak semua isi array
// for
for ($i = 0; $i < count($mhs); $i++) {
    echo $mhs[$i];
    echo '<br>';
}

echo '<hr>';

// Foreach
foreach($mhs as $m) {
echo $m;
echo '<br>';
}

echo '<hr>';

// Mencetak Array (Khusus untuk debug)
// Var_dump / print_r

var_dump($mhs);
echo '<br>';
print_r($myarray);
