<?php

	$conn=@mysql_connect("localhost","root", "");
	if(!$conn){
		die("could not connect to the database:".mysql_error());
		}
	$dbcnx=@mysql_select_db("gilgal", $conn);
	if(!$dbcnx){
		die("could not select the database:".mysql_error());
		}
?>