<!DOCTYPE html>
<html>
	<head>
		<?php
		$candidate_id = 400311;
		$govtrack_photos_url = "http://govtrack.us/data/photos/";
		// start MySQL connection
		$con = mysql_connect("localhost","root","");
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
		mysql_select_db("candidates_2012", $con);
		$sql = "CREATE TABLE stats
		(
		FirstName varchar(15),
		LastName varchar(15),
		Age int,
		ServedSince TIME,
		BillsSponsored int,
		BillsPassed int
		)";
		mysql_query($sql, $con);
		
		mysql_close($con);
		?>
		<link rel="icon" type="image/ico" href="favicon.ico"> 
		<link rel="stylesheet" href="stats.css" type="text/css" />
		<title><?php echo "Statistics Page" ?></title>
	</head>
	<body>
		<header></header>
		<h1>
			<img src="<?php echo $govtrack_photos_url . $candidate_id; ?>.jpeg" alt = "Ron Paul's face" />
		</h1>
		<?php
		// Load XML file
		$xml = simplexml_load_file("people.xml");
		
		echo $xml->getName() . "<br />";
		
		foreach($xml->children() as $person)
		{
			foreach($person->attributes() as $a => $b)
			{
				echo $a . ": " . $b . " ";
			}
			echo "<br />";			
		}
		?>
		<footer></footer>
	</body>
</html>