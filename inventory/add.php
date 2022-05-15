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

<legend><h3>ADD TO STOCK</h3></legend>

<?php 

include_once("../db_connect.php");



if(isset($_POST['add'])){
	
	$id=$_POST['id'];
	$table=$_POST['table'];
		$name=$_POST['name'];
	$quant=$_POST['quant'];	
	$qty=$_POST['qty'];
	$confirmqty=$_POST['confirmqty'];
	$new=$quant+$qty;
	$date=$_POST['day']."-".$_POST['month']."-".$_POST['year'];

	//check for empty errors
	
	if($name==""){
		
		$error[]="Enter your name please";
		}
	if($qty==""){
		$error[]="Select quantity to be added";
		}
	if($confirmqty==""){
		$error[]="Confirm quantity to be added";
		}
		
	if($qty!=$confirmqty){
		
		$error[]="Quantity selected do not match";
		}
		
	if(!empty($error)){
		echo "<h1 class='warning'>ERROR:Please complete the missing item</h1><br/>";
		
		foreach($error as $err){
			
			echo "<p class='warning'>$err</p><br/>";
					header("location:add.php?id=$id&table=$table");

			}
		}
	
	if(empty($error)){
	$update="UPDATE `{$table}` SET `quantity`='$new' WHERE `pid`='$id'";
	$query=mysql_query($update) or die("UPDATE ERROR:".mysql_error());
	
	
	
	//record the action
	$add="INSERT INTO `gilgal`.`addinfo` (
`pid` ,
`table` ,
`qty` ,
`date` ,
`who`
)
VALUES ('$id', '$table', '$qty', '$date', '$name')";

$addin=mysql_query($add) or die("INSERT ERROR".mysql_error());

	
	
	echo "<center><h1><img src='../images/ok.gif' width='68' height='62' />Product added to stock!!!</h1></center>";
	
	
}//end of $error IF
	}//end of IF









?>
<?php
$id=$_GET['id'];
$table=$_GET['table'];

$query="SELECT * FROM `{$table}` WHERE `pid`='$id'";
$answer=mysql_query($query);


if(mysql_num_rows($answer)!=0){//if table is not empty
	?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <table class="restable" border="0" style="height:250px;"   >
    
	<?php 
	while($row=mysql_fetch_array($answer)){//while loop to fetch from the database
?>	
<input type="hidden" name="id" value="<?php echo $id;?>" />
<input type="hidden" name="table" value="<?php echo $table;?>" />
<td style="color:#a9aaab;"><?php echo $row['product'];?></td>
<td style="color:#a9aaab;"><?php echo $row['quantity'];?>
<input type="hidden" value="<?php echo $row['quantity'];?>" name="quant" />
</td>
</tr>
  <tr>
    <td style="color:#a9aaab;">Quantity to be added:</td>
    <td>
	      <select name="qty" id="select">
        <option selected="selected">select</option>
        <option>........</option>

	<?php 
	$range=range(0, 100);
	foreach($range as $qty){
		echo "<option value='$qty'>$qty</option>";
		
		}?>
        </select>
        </td>
    <td>&nbsp;</td>
  </tr>


  <tr>
    <td style="color:#a9aaab;">Confirm Quantity to be added:</td>
    <td>
	      <select name="confirmqty" id="select">
        <option selected="selected">select</option>
        <option>........</option>

	<?php 
	$range=range(0, 100);
	foreach($range as $qty){
		echo "<option value='$qty'>$qty</option>";
		
		}?>
        </select>
        </td>
    <td>&nbsp;</td>
  </tr>

<tr>
<td>Date:</td>
        <td>
        
    D <?php 
		echo "<select name='day'>";
		echo "<option value=''>Select</option>";
		echo "<option value=''>---</option>";
$days=range(1, 31);
foreach($days as $da){
echo "<option value=$da>$da</option>";
	}
?>
</select>
    M
		<?php echo "<select name='month'>";?>
        <?php $month=array('01','02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
					echo "<option value=''>Select</option>";
		echo "<option value=''>-----------------</option>";
	foreach($month as $months){
		echo "<option value=$months>$months</option>";
	}
?></select>    
    
    Y:
    
    <?php  
			echo "<select name='year'>";

	echo "<option value=''>Select</option>";
		echo "<option value=''>---</option>";
		for($my=2004; $my<=2015; $my++){
		echo "<option value=$my>$my</option>";
			}
?></select></label>
</td>


</tr>


<tr>
<td>Name:</td>
<td><input type="text" name="name" size="50"  /></td>


</tr>

<tr>
<td></td>
<td><input type="submit" value="add to stock" name="add" class="but" onclick="return confirm('Add product to stock?');" /></td>
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