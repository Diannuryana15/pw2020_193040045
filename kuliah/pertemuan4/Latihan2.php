<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: lightblue;
        text-align: center;
        line-height: 50px;
        transition: 0.5s;
        float: left;
        margin: 2px;
    }

    .kotak:hover {
        transform: rotate(360deg);
    }

    }
    </style> 
</head>
<body>
<?php
for ($i =1; $i <= 1000; $i++) {
 echo "<div class='kotak'>$i</div>";
}
?>
</body>
</html>