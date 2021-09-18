<?php
include('config.php');
if(count($_POST)>0)
{
mysqli_query($db,"update products set product_id='".$_POST['product_id']."', product_name='".$_POST['product_name']."',category='".$_POST['category']."',price='".$_POST['price']."',seller_city='".$_POST['seller_city']."'");
}
$result=mysqli_query($db, "select * from products where product_id='".$_GET['product_id']."'");
$row=mysqli_fetch_array($result);
?>
<html>
<body>
<a href="displayall.php">Users List</a>
<form name="frm" method="post" action="">
<input type="text" name="product_id" value="<?php echo $row['product_id'];?>"> 
<input type="text" name="product_name" value="<?php echo $row['product_name'];?>"> 
<input type="text" name="category" value="<?php echo $row['category'];?>"> 
<input type="text" name="price" value="<?php echo $row['price'];?>"> 
<input type="text" name="seller_city" value="<?php echo $row['seller_city'];?>"> 

<input type="submit" name="submit" value="submit"> 
</form>
</body>
</html>