<?php
include("config.php");
$result=mysqli_query($db,"select * from products");
while($row=mysqli_fetch_assoc($result))
{
?>
<table border="1">
<tr>
<td><?php echo $row['Product_id']; ?></td>
<td><?php echo $row['Product_name']; ?></td>
<td><?php echo $row['Category']; ?></td>
<td><?php echo $row['Price']; ?></td>
<td><?php echo $row['Seller_City']; ?></td>
<td><a href="delete.php?id=<?php echo $row['Product_id']; ?>">Delete</a></td>
<td><a href="delete.php?id=<?php echo $row['Product_id']; ?>">Edit </a></td>

</tr> 
</table>
<?php
}
?>
