<?php

include("config.php");
$id=$_GET['id'];

$del=mysqli_query($db,"delete from products where products='$id'");
if ($del)
{
header("location:displayall.php");

}
else
{
echo "no record found";
}
?>