<?php
$host = '18.194.1.233';
$username = 'root';
$password = '';
$db = mysql_connect($host, $username, $password) or die('Could not connect: ' . mysql_error());
mysql_select_db('candidates_2012');
mysql_query("CREATE TABLE login", $db);

?>