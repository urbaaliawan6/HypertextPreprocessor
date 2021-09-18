<?php
include ("config.php");
$a= $_REQUEST['id'];
$b= $_REQUEST['country'];
$c= $_REQUEST['city'];
$d= $_REQUEST['employmentrate'];


$sql="INSERT INTO form(id,country,city,employmentrate)
VALUES('$a','$b', '$c', '$d')";

if($db->query($sql)==TRUE)
{
echo "Added";
}
?>