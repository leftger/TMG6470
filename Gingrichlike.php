<?php
include("navbar.php");
?>
<html>
		<div id="page">
		<div id="barackswrap">			
		<img src="BarackObama2005portrait.png">
<?
include("Gingrichcomments.php");
$host="sql.mit.edu"; 
$username="grosas";
$password="snett"; 
$db_name="grosas+candidates_2012";  
 // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = mysql_connect("$host", "$username", "$password") or die(mysql_error());
$id=$_GET['id'];
$vote=$_GET['vote'];
mysql_query("UPDATE $tbl_name SET Vote=$vote WHERE ID = $id") or die('dead!'); 


mysql_close($conn);
echo "<meta http-equiv=\"Refresh\" content=0;url=\"$web\">";
//header('Location: Obamasapproval.php');

?>
		</div>
		</div>
</html>
