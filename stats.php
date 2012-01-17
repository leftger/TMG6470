<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/ico" href="favicon.ico"> 
		<link rel="stylesheet" href="stats.css" type="text/css" />
		<title><?php echo "Statistics Page" ?></title>
	</head>
	<body>
		<header></header>
		<h1>
			<?php
			$candidate_id = 400311;
			?>
			<img src="http://govtrack.us/data/photos/<?php echo $candidate_id; ?>.jpeg" alt = "Ron Paul's face" />
			<?php 
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
		</h1>
		<footer></footer>
	</body>
</html>
