<?php
ob_start();
include("paulbio.php");
$host="18.194.1.88:3306"; 
$username="TMG6470";
$password="snett"; 
$db_name="candidates_2012";  
$tbl_name="PaulComments";
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = mysql_connect("$host", "$username", "$password") or die(mysql_error());

$mycomment=$_POST['comment']; 
$myname=$_SESSION['myusername'];
$_SESSION['reguname'] = $myname;
$newcomment = "INSERT INTO $tbl_name (Name, Coment) values ('$myname', '$mycomment')";
$_SESSION['regresult'] = mysql_query($newcomment);
$_SESSION['registered'] = true;
echo "<meta http-equiv=\"Refresh\" content=0;url=\"paulbio.php\">";

ob_end_flush();
?>