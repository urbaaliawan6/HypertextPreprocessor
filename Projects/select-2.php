<?php
include('config.php');
$result=mysqli_query($db,"select* from star where username='adil'" );
$result=mysqli_query($db,"select* from star where password='2345'" );
$result=mysqli_fetch_array($result);
echo $result['username'];
echo "<br>";
echo $result['password'];
?>