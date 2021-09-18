<!DOCTYPE html>
<html>
<head>
<title> Print Array 5 Values</title>
</head>
<body>
<h1>Print  Value In Array</h1>
<?php
$col=array(1, 2, 3, 4, 5);
foreach ($col as $val)
{
$val=$val+2;
echo "$val <br>";
}
?>
</body>
</html>