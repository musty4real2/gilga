
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div id="head">
<img src="../images/HEAD.jpg" width="1200" height="115" />
</div>


<div id="body">
<fieldset style="margin-top:50px;">
<center><p class="er">Press PRESS F5 to see changes made</p></center>
<?php 
include_once("../db_connect.php");
$product=$_GET['product'];
$table=$_GET['table'];

?>
<legend><h1><?php echo $product;?></h1></legend>

<?php
$query="SELECT * FROM `edmark` ORDER BY `product` ASC ";
$answer=mysql_query($query) or die("ERROR:".mysql_error());

echo mysql_num_rows($answer)."$product products in stock";

if(mysql_num_rows($answer)!=0){//if table is not empty
	?>
	<table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse;">
  <tr style="background-color:#0e9dcc; color:#FFF; font-family:Tahoma, Geneva, sans-serif;">
    <th>Name</th>
    <th>Product code</th>
    <th>Quantity</th>
    <td></td>
    <td></td>
    <td></td>
    </tr>
    
	<?php 
	$bg = '#eeeeee';
while($row=mysql_fetch_array($answer)){//while loop to fetch from the database
?>	
<?php 
  $name=$row['name'];
$bg = ($bg=='#eeeeee' ? '#ffffff' :
'#eeeeee'); // Switch the background


 echo '<tr bgcolor="' . $bg . '">';  ?>
<td><?php echo $row['product'];?></td>
<td><?php echo $row['product_code'];?></td>
<td><?php echo $row['quantity'];?></td>
<td ><a  title="add to stock" onclick="return confirm('Add more to stock?')" href="<?php echo "add.php?id={$row['pid']}&table=edmark";?>">ADD</a></td>
	
<td><a  title="remove from stock" onclick="return confirm('remove from stock?')" href="<?php echo "remove.php?id={$row['pid']}&table=edmark";?>">REMOVE</a></td>

<td><a  title="view"  href="<?php echo "statement.php?id={$row['pid']}&table=edmark&name={$row['product']}";?>">INVENTORY STATEMENT</a></td>


    </tr>
    
	<?php
	}//end of WHILE
	
	}//end of IF
?>
</table>

</fieldset>
</div>
</div>
<center><p>&copy;2012. All Rights Reserved. Gilgal Health Resource Centre</p></center>


</body>
</html>