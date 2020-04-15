<?php

$GLOBALS['jawabanIsset'] = "Isset adalah = digunakan untuk menyatakan variabel sudah diset atau tidak. Jika variabel sudah diset makan variavel akan mengembalikan nilai true, sebaliknya akan bernilai false <br><br>";
$GLOBALS['jawabanEmpty'] = "Empty adalah = empty(), digunakan untuk memerikasa apakah variabel form tidak dikirim atau tidak berisi data alias kosong. berbeda denagn isset(), yang mengembalikan nilai false pada variabel yang di-unset, empty() akan mengembalikan nilai true.";

function soal(){
    echo $GLOBALS['jawabanIsset'] ."". $GLOBALS['jawabanEmpty'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
.style{
    width: 700px;
    height: 150px;
    border: 1px solid black;
}
</style>

</head>
<body>
    <div class="style"><?= soal();?></div>
</body>
</html>