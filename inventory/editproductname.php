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



if(isset($_POST['edit'])){
	
	$id=$_POST['id'];
		$table=$_POST['table'];
	$product=$_POST['product'];
	
	$update="UPDATE `{$table}` SET `product`=UPPER('$product') WHERE `pid`='$id'";
	$query=mysql_query($update) or die("UPDATE ERROR:".mysql_error());
	
	
	echo "<center><img src='../images/ok.gif' width='68' height='62' /><h1>Product name updated!</h1></center>";
	exit();
	
	
	}









?>
<h1><?php echo $product;?>Products</h1>

<?php
$id=$_GET['id'];
$table=$_GET['table'];

$query="SELECT * FROM `{$table}` WHERE `pid`='$id'";
$answer=mysql_query($query) or die("SELECT ERROR:".mysql_error());



if(mysql_num_rows($answer)!=0){//if table is not empty
	?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<table border="0" width="100%">
    
	<?php 
	while($row=mysql_fetch_array($answer)){//while loop to fetch from the database
?>	
<tr>
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="table" value="<?php echo $table;?>" />
<td><input type="text" name="product" value="<?php echo $row['product'];?>" size="100" /></td>
<td><input type="submit" value="save changes" name="edit" onclick="return confirm('edit product name?');" /></td>
</tr>
<?php }
?>
</table>
</form>
<?php
}?>

</fieldset>
</div>
</div>
<center><p>&copy;2012. All Rights Reserved. Gilgal Health Resource Centre</p></center>

</body>
</html>