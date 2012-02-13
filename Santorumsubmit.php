<?php
ob_start();
include("Santorumbio.php");
$host="sql.mit.edu"; 
$username="grosas";
$password="snett"; 
$db_name="grosas+candidates_2012";  
$tbl_name="SantorumComments";

mysql_select_db($db_name)or die("cannot select DB");
$conn = mysql_connect($host, $username, $password) or die(mysql_error());

$mycomment=$_POST['comment']; 
$myname=$_SESSION['myusername'];
$_SESSION['reguname'] = $myname;
$newcomment = "INSERT INTO $tbl_name (Name, Coment) values ('$myname', '$mycomment')";
$_SESSION['regresult'] = mysql_query($newcomment,$conn);
$_SESSION['registered'] = true;
echo "<meta http-equiv=\"Refresh\" content=0;url=\"Santorumbio.php\">";

ob_end_flush();
?>
