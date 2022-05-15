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
<legend><h3>ADD PRODUCT TO INVENTORY</h3></legend>


<?php

if(isset($_POST['enter'])){

include_once("db_connect.php");

$ptype=$_POST['ptype'];
$confirmptype=$_POST['confirmptype'];
$product=addslashes($_POST['product']);
$qty=addslashes($_POST['qty']);
$confirmqty=addslashes($_POST['confirmqty']);



//CHECK FOR ERRORS

if($ptype!=$confirmptype){
	$error[]="Product type selected are not the same";
	}

if($ptype==""){
	$error[]="Please select the product type";
	}


if($qty!=$confirmqty){
	
	$error[]="Quantity selected are not the same";
	}

if($qty==""){
	$error[]="Please select quantity";
	}


if(!empty($error)){
		echo "<h1 class='warning'>ERROR:Please complete the missing item</h1><br/>";
		
		foreach($error as $err){
			
			echo "<p class='warning'>$err</p><br/>";
		}//end of foreach
	}//end of error IF

elseif(empty($error)){//enter rcords into database here

/******************generate product code**********************************/
		function createPassword($length) {
	$chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$i = 0;
	$password = "";
	while ($i <= $length) {
		$password .= $chars{mt_rand(0,strlen($chars))};
		$i++;
	}
	return $password;
		}
	
	
	$pcode=createPassword(8);
/******************generate product code**********************************/



/******************IF EDMARK PRODUCT**********************************/
if($ptype=="EDMARK"){
	
	$sql="INSERT INTO `edmark` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2>Product added to  $ptype Inventory</h2>";
	
	}
	
/******************IF EDMARK PRODUCT**********************************/
	
	
/******************IF GENERAL PRODUCT**********************************/
if($ptype=="GENERAL"){
	
	$sql="INSERT INTO `general` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2>Product added to $ptype Inventory</h2>";
	
	}
	
/******************IF GENERAL PRODUCT**********************************/
	
/******************IF HALLELUYAH PRODUCT**********************************/
if($ptype=="HALLELUYAH"){
	
	$sql="INSERT INTO `halleluyah` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2>Product added to  $ptype Inventory</h2>";
	
	}
	
/******************IF HALLELUYAH PRODUCT**********************************/
	
	
/******************IF DR CLARK'S PRODUCT**********************************/
if($ptype=="DR CLARK'S"){
	
	$sql="INSERT INTO `drclark` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2 >Product added to $ptype Inventory</h2>";
	
	}
	
/******************IF CLARK'S PRODUCT**********************************/
	
/******************IF DR NG4L PRODUCT**********************************/
if($ptype=="NG4L"){
	
	$sql="INSERT INTO `ng4l` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2>Product added to $ptype Inventory</h2>";
	
	}
	
/******************IF NG4L PRODUCT**********************************/
	



/******************IF DR NG4L PRODUCT**********************************/
if($ptype=="BOOKS"){
	
	$sql="INSERT INTO `books` (`product`, `quantity`, `product_code`) VALUES (UPPER('$product'), '$qty', '$pcode')";
	$query=mysql_query($sql)or die("ERROR:".mysql_error());
	
	
	echo "<h2>Product added to $ptype Inventory</h2>";
	
	}
	
/******************IF NG4L PRODUCT**********************************/
	




	}// end of ELSEIF
}//end of IF 



?>




<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<table width="718" border="0" height="300">
  <tr>
    <td>Product Type:</td>
    <td><label>
      <select name="ptype" id="select">
        <option selected="selected">select</option>
        <option value="">........</option>
        <option value="BOOKS">BOOKS</option>
        <option value="DR CLARK'S">DR CLARK</option>
        <option value="EDMARK">EDMARK</option>
        <option value="GENERAL">GENERAL</option>
        <option value="HALLELUYAH">HALLELUYAH</option>
        <option value="NG4L">NG4L</option>
      </select>
    </label></td>
    <td>&nbsp;</td>
  </tr>
  
    <tr>
    <td> Confirm Product Type:</td>
    <td><label>
      <select name="confirmptype" id="select">
        <option selected="selected">select</option>
        <option value="">........</option>
        <option value="BOOKS">BOOKS</option>
        <option value="DR CLARK">DR CLARK</option>
        <option value="EDMARK">EDMARK</option>
        <option value="GENERAL">GENERAL</option>
        <option value="HALLELUYAH">HALLELUYAH</option>
        <option value="NG4L">NG4L</option>
      </select>
    </label></td>
    <td>&nbsp;</td>
  </tr>

  
  <tr>
    <td>Product:</td>
    <td><label>
      <input name="product" type="text" id="textfield" size="70" />
    </label></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Quantity:</td>
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
    <td>Confirm Quantity:</td>
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
    <td></td>
    <td><input type="submit" name="enter" value="ENTER PRODUCT" onclick="return confirm('Go ahead and enter product?')" class="but"/></td>
    <td>&nbsp;</td>
  </tr>

</table>
</form>
</fieldset>
</div>
</div>
<center><p>&copy;2012. All Rights Reserved. Gilgal Health Resource Centre</p></center>

</body>
</html>