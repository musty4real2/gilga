<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/main.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
<div id="wrapper">
<div id="head">
<img src="../images/HEAD.jpg" width="1200" height="115" />
</div>


<div id="body">
<fieldset style="margin-top:50px;">
<legend><h3>MEAL MENU</h3></legend>






<?php

if(isset($_GET['menubut'])){
	
	$name=addslashes($_GET['name']);
	

	
	//CHECK FOR ERRORS
	
	if($name==""){
		
		$error[]="Enter Client name before you preview menu";
		}
		
	if($_GET['menu']==""){
		$error[]="Please Select Menu type";
		}
	
	if(!empty($error)){
		
		echo "<h1 class='warning'>ERROR:Please complete the missing item</h1><br/>";
		
		foreach($error as $err){
			
			echo "<p class='warning'>$err</p><br/>";
			}

	}
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Cancer"){
			
			header("location:cancer.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Halleluyah"){
			
			header("location:halleluyah.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Daily Menu"){
			
			header("location:dailymenu.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Parasite Killing"){
			
			header("location:parasite_killing.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		
		
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Raw Diet"){
			
			header("location:raw_diet.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		
		
		///////////////////**************************************/////////////////////////////////////s
		if($_GET['menu']=="Weight Loss"){
			
			header("location:weight_loss.php?client=$name");
			}
		///////////////////**************************************/////////////////////////////////////s
		


	
	
	
	
	}


?>








<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
<table border="0" height="200">
<tr>
<td>Clients name:</td>
<td><input type="text" name="name" size="80"  /></td>
</tr>

<tr>
<td>Select Menu:</td>
<td><select name="menu">
<option value="">select</option>
<option value="">........</option>
<option value="Cancer">Cancer</option>
<option value="Halleluyah">Halleluyah</option>
<option value="Daily Menu">Daily Menu</option>
<option value="Parasite Killing">Parasite Killing</option>
<option value="Weight Loss">Weight Loss</option>
<option value="Raw Diet">Raw Diet</option>
</select>
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="preview menu" name="menubut" class="but" /></td>
</tr>

</table>
</form>
</form>
</fieldset>
</div>
</div>
<center><p>&copy;2012. All Rights Reserved. Gilgal Health Resource Centre</p></center>
</body>
</html>