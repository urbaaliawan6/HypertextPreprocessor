<!Doctype html>
<html>
<head>
<title>For Each Loop</title>
</head>
<body>
<h1>Foreach loop</h1>
<h4>Foreach loop only used in case of array</h4>
<?php
$col=array('a', 'b', 'c');//decalare and intialize an array

foreach ($col as $val)
{
	echo "$val <br>";
}
?>
</body>
</html>