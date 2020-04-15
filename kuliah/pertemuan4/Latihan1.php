<?php
// penghitungan Nilai Akhir 

// A : Minimal 85
// B : Minimal 70 - 85
// C : Minimal 55 - 70
// D : Minimal 40 - 55
// E : dibawah 40

$nilai = 80;
if ($nilai >= 85 ){
    echo "A";
} else if($nilai >= 70){
    echo "B";
} else if($nilai >= 55){
    echo "C";
} else if($nilai >= 40){
    echo "D";
}
else{
    echo "E";
}