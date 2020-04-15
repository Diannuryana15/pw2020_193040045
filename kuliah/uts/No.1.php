<?php
function cetak_bintang($bintang) {
    for($i=1;$i <= $bintang; $i++) {
        for($j=1;$j<=$i;$j++) {
            echo "<p>*</p>";
        }
        echo "<div class ='clear'></div> ";
    }
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            margin: 5px;
            float: left;
        }
        .clear{
            clear: left;
        }
    </style>
</head>
<body>
    <?php cetak_bintang(5)?>
</body>
</html>