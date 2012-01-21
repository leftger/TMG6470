<?php
    $con = mysql_connect("localhost","root","");
	$db_name = "candidates_2012";
	if(!$con)
	{
		 die('Could not connect: ' . mysql_error());
	}
	if (mysql_query("CREATE DATABASE candidates_2012", $con))
	{
		echo "Database created";
	}
	else {
		echo "Error creating database: " . mysql_error();
	}
	
	mysql_close($con);
?>