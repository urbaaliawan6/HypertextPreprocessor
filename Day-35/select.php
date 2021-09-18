<?php
include('config.php');

$a=$_REQUEST['username'];
$b=$_REQUEST['password'];
$r=mysqli_query($db, "select * from users where username='$a' and password = '$b'");
$r=mysqli_fetch_array($r);
echo $r["username"];
echo $r["password"];

?>