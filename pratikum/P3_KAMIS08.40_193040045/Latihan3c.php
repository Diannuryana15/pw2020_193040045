<?php
function tumpukanBola($tumpukan){
    for($i = 1; $i <= $tumpukan; $i++){
        for($j = 1; $j <= $i ;$j++){
            echo "<div class='bulat'>$i</div>";
        }
        echo "<div class='clear'></div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .bulat{
        width: 50px;
        height: 50px;
        border: 1px solid black;
        border-radius: 50%;
        background-color: salmon;
        text-align: center;
        font-size: 30px;
        float: left;
        text-align: center;
        line-height: 50px;
        margin: 2px;
    }
    .clear{
        clear: both;
    }
    </style>
</head>
<body>
<?= tumpukanBola(5);?>

</body>
</html>