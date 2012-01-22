<?php
$host = '18.194.1.233:3306';
$username = 'root';
$password = '';
$con = mysql_connect($host, $username, $password);
$db='candidates_2012';

if(!$con)
{
	die('Could not connect: ' . mysql_error());
}

mysql_select_db($db,$con);
$table_name = "stats";
echo mysql_query("CREATE TABLE stats", $con);
?>