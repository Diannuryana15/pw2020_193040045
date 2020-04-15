<?php

for($i= 1; $i <= 10; $i++){
    if ($i == 6 && $i != 5){
    echo"angkot No. $i  beroperasi dengan baik!!. <br>";
    }
    elseif ($i ==8 || $i ==10 || $i ==5) {
        echo "angkot No. $i sedang lembur!!. <br>";
    }
    else {
        echo "angkot No. $i sedang tidak beroperasi!!. <br>";
    }
}
?>