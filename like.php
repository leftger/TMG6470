<?php
include("readcomments.php");
$host="18.194.1.88:3306"; 
$username="TMG6470";
$password="snett"; 
$db_name="candidates_2012";  
$tbl_name="Comments"; // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = mysql_connect("$host", "$username", "$password") or die(mysql_error());
$id=$_GET['id'];
$vote=$_GET['vote'];
mysql_query("UPDATE Comments SET Vote=$vote WHERE ID = $id") or die('dead!'); 


mysql_close($conn);
header('Location: Obamasapproval.php');

?>