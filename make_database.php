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
	// Create table
	mysql_select_db($db_name, $con);
	$table_name = "stats";
	$sql = "CREATE TABLE " . $table_name;
	mysql_query($sql, $con);
		
	// Load XML file
	$xml = simplexml_load_file("people.xml");
	
	
	foreach($xml->children() as $person)
	{
		foreach($person->attributes() as $a)
		{
			set_time_limit(4);
			mysql_query("IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.COLUMNS 
           	WHERE TABLE_NAME='" . $table_name . "' AND column_name='" . $a . "') 
			BEGIN ALTER TABLE `" . $table_name . "` ADD `" . $a . "` varchar(15) NOT NULL; END;");
		}
		foreach($person->attributes() as $a=>$b)
		{
			set_time_limit(5);
			echo $a . " " . $b . " ";
			mysql_query("INSERT INTO " . $table_name . " (" . $a . ") VALUES (" . $b . ");");
			
		}		
	}
	
	mysql_close($con);
?>