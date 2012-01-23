<?php
session_start();
print_r($_SESSION);
$_SESSION['test'] = 'hi';

if (isset($_POST['username'])) {
	require 'database.php';
	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);
	$password = sha1($password);
	$query = "SELECT COUNT(*) FROM users WHERE username='$username'";
	$result = mysql_query($query) or die('bad query');

	if ($result) {
		echo 'username already used';		
	} else {
		$query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
		$result = mysql_query($query) or die(mysql_error());
	}
}