<?php
include("navbar.php");
?>
<html>
		<div id="page">
		<div id="barackswrap">			
		<img src="BarackObama2005portrait.png">
<?
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
$bvte=$_GET['vote'];
mysql_query("UPDATE Comments SET BadVote=$bvte WHERE ID = $id") or die('dead!'); 


mysql_close($conn);
echo "<meta http-equiv=\"Refresh\" content=0;url=\"Obamasapproval.php\">";
//header('Location: Obamasapproval.php');

?>
		</div>
		</div>

</html>
