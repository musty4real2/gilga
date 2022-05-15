
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
$id=$_GET['id'];
$table=$_GET['table'];



?>
<h1 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#0e9dcc;"> <?php echo $_GET['name'];?> &nbsp; Inventory Statement</h1>
<fieldset>
<legend><h3>PRODUCTS ADDED</h3></legend>

<?php
$query="SELECT * FROM `addinfo` WHERE `pid`='$id' AND `table`='$table'";
$answer=mysql_query($query) or die("ERROR:".mysql_error());

if(mysql_num_rows($answer)==0){
	echo "No inventory statement avalaible"; 
	}


if(mysql_num_rows($answer)>0){//if table is not empty?>
	
            <table class="restable" border="0" style="text-align:center;" >
        <tr style="background-color:#0e9dcc; color:#FFF; font-family:Tahoma, Geneva, sans-serif;"> 
    <th>Product</th>
    <th>Quantity</th>
    <td>Date added</td>
    <td>Addded by</td>
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
<td><?php echo $_GET['name'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['who'];?></td>
	</tr>
	<?php
	}//end of WHILE
	}//end of IF
?>
</table>
</fieldset>



<fieldset>
<legend><h3>PRODUCTS REMOVED</h3></legend>

<?php
$query="SELECT * FROM `removeinfo` WHERE `pid`='$id' AND `table`='$table'";
$answer=mysql_query($query) or die("ERROR:".mysql_error());

if(mysql_num_rows($answer)==0){
	echo "No inventory statement avalaible"; 
	}


if(mysql_num_rows($answer)>0){//if table is not empty?>
	
            <table class="restable" border="0" style="text-align:center;" >
        <tr style="background-color:#0e9dcc; color:#FFF; font-family:Tahoma, Geneva, sans-serif;"> 
    <th>Product</th>
    <th>Quantity</th>
    <td>Date removed</td>
    <td>Removed by</td>
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
<td><?php echo $_GET['name'];?></td>
<td><?php echo $row['qty'];?></td>
<td><?php echo $row['date'];?></td>
<td><?php echo $row['who'];?></td>
	</tr>
	<?php
	}//end of WHILE
	}//end of IF
?>
</table>
</fieldset>
<center><SCRIPT LANGUAGE="JavaScript">
<!-- Begin
if (window.print) {
document.write('<form>'
+ '<input type="button" name="print" value="Print This Page" '
+ 'onClick="javascript:window.print()"></form>');
}
// End -->
</SCRIPT></center>
</fieldset>
</div>
</div>
<center><p>&copy;2012. All Rights Reserved. Gilgal Health Resource Centre</p></center>

</body>
</html>