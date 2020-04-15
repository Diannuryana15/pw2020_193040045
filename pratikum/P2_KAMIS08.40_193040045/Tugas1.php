<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table width="400px" cellspacing="0px" cellpadding="0px" border="1px">
<?php  
for($j=1;$j<=8;$j++)  
{  
	echo "<tr>";  
	for($i=1;$i<=8;$i++)  
	{
		$total=$j+$i;
		if($total%2==0)
		{  
			echo "<td height=35px width=30px bgcolor=salmon></td>";  
		}  
		else  
		{  
			echo "<td height=35px width=30px bgcolor=skyblue></td>";  
		}  
	}  
	echo "</tr>";  
}  
?>  
</table>
</body>
</html>