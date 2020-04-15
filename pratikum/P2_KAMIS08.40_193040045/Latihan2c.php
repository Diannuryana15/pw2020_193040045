<?php 
for ($i = 1; $i <= 3; $i++) {
    for($j = 1; $j <= $i; $j++) {
echo "<div class='bulat'>$i</div>";
    }
    echo '<div class="clear"></div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
    <style>
    .bulat {
        width: 50px;
        height: 50px;
        background-color: Salmon;
        text-align: center;
        line-height: 50px;
        float: left;
        margin: 2px;
        border-radius : 100%;
        border: 2px solid black;
        font-weight: bold; 
    }
    .clear{
        clear : both;
    }