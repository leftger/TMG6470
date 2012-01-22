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
		echo "Error creating database: " . mysql_error() . "<br />";
	}
	// Create table
	mysql_select_db($db_name, $con);
	$table_name = "stats";
	mysql_query("CREATE TABLE stats", $con);
		
	// Load XML file
	$xml = simplexml_load_file("candidates.xml");
	
	foreach($xml->children() as $person)
	{
		$atts = array();
		foreach($person->attributes() as $a)
		{
			$atts[] = $a->getName();
			/*set_time_limit(4);
			mysql_query("IF EXISTS (SELECT * FROM INFORMATION_SCHEMA.COLUMNS 
           	WHERE TABLE_NAME='" . $table_name . "' AND column_name='" . $a . "') 
			BEGIN ALTER TABLE `" . $table_name . "` ADD `" . $a . "` varchar(15) NOT NULL; END;");*/
			
		}
		echo print_r($atts) . "<br />";
		echo array_values($atts) . "<br />";
		foreach($person->attributes() as $a=>$b)
		{
			set_time_limit(5);
			//echo $a . " " . $b . " ";
			$command = "INSERT INTO " . $table_name . " (" . $a . ") VALUES (" . $b . ");";
			echo $command . "<br />";
			$result = mysql_query($command,$con);
			if(!$result)
			{
				echo 'Invalid query: '.mysql_error()."<br />";
			}
			//INSERT INTO `candidates_2012`.`login` (`id`, `name`, `password`) VALUES (NULL, 'dupes', 'nancy'), (NULL, 'gerzain', 'chihuahua');
		}		
	}
	
	mysql_close($con);
?>