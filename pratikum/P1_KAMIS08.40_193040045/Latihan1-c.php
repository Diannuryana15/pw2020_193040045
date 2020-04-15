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
        background-color: Salmon;
        text-align: center;
        line-height: 50px;
        transition: 0.5s;
        float: left;
        margin: 2px;
        border-radius: 50%;
    }

    </style> 
</head>
<body>
<?php
  $a = "A";
  $b = "B";
  $c = "C";
?>
<table>
<tr>
    <td>
    <?php 
echo "<div class='kotak'>$a</div>";
?>    
    </td>
</tr>
<tr>
    <td>
    <?php 
echo "<div class='kotak'>$b</div>";
?>    
    </td>
    <td>
    <?php 
echo "<div class='kotak'>$b</div>";
?>    
    </td>

</tr>
<tr>
    <td>
    <?php 
echo "<div class='kotak'>$c</div>";
?>    
    </td>
    <td>
    <?php 
echo "<div class='kotak'>$c</div>";
?>    
    </td>
    <td>
    <?php 
echo "<div class='kotak'>$c</div>";
?>    
    </td>


</tr>

</table>
</body>
</html>