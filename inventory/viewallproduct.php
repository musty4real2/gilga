
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
<?php 
include_once("../db_connect.php");
$product=$_GET['product'];
$table=$_GET['table'];

?>
<legend><h3><?php echo $product;?></h3></legend>

<?php
$query="SELECT * FROM `{$table}` ORDER BY `product` ASC ";
$answer=mysql_query($query) or die("ERROR:".mysql_error());

echo mysql_num_rows($answer)."$product in stock";

if(mysql_num_rows($answer)!=0){//if table is not empty
	?>
	<table border="1" class="restable" width="100%" style="color:#a9aaab; text-align:center; border-collapse:collapse;">
  <tr style="background-color:#0e9dcc; color:#FFF; font-family:Tahoma, Geneva, sans-serif;">
    <th>Name</th>
    <th>Product code</th>
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
<td><a  title="edit product name" onclick="return confirm('do you really want to edit product name?')" href="<?php echo "editproductname.php?id={$row['pid']}&table={$table}";?>">Edit</a></td>
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