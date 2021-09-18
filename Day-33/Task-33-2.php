<!Doctype html>
<html>
<head>
<title>For Each Loop</title>
</head>
<body>
<h1>Braek Statement</h1>
<h4>50 number is skip</h4>
<?php
for ($x=1; $x<100; $x++)
{
if ($x==50)
{
continue;
}
if ($x==80)
{
break;
}
echo "$x <br>";
}
?>
</body>
</html>