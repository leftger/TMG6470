<?php
ob_start();
include("Romneybio.php");
$host="sql.mit.edu"; 
$username="grosas";
$password="snett"; 
$db_name="grosas+candidates_2012";  
$tbl_name="RomneyComments";
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = mysql_connect("$host", "$username", "$password") or die(mysql_error());

$mycomment=$_POST['comment']; 
$myname=$_SESSION['myusername'];
$_SESSION['reguname'] = $myname;
$newcomment = "INSERT INTO $tbl_name (Name, Coment) values ('$myname', '$mycomment')";
$_SESSION['regresult'] = mysql_query($newcomment);
$_SESSION['registered'] = true;
echo "<meta http-equiv=\"Refresh\" content=0;url=\"Romneybio.php\">";

ob_end_flush();
?>
