<?php
include ('config.php');
$a= $_REQUEST['name'];

$sql=mysqli_query($db,"SELECT *  from products where Product_name LIKE '%$a%'");
while ($row=mysqli_fetch_array($sql)) {
	# code...


?>	
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
<tr>
<td><?php echo $row['Product_name'] ?></td>
</tr>
</td>
</table>
</body>
</html>

<?php
}
?>