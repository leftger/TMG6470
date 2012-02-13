<?php
ob_start();
$host="sql.mit.edu"; 
$username="grosas";
$password="snett"; 
$db_name="grosas+candidates_2012";  
$tbl_name="login"; // Table name
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = mysql_connect("$host", "$username", "$password") or die(mysql_error());


$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];
$mypassword2=$_POST['mypassword2'];
// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

if(!$_POST['myusername'] || !$_POST['mypassword']){
   die('You didn\'t fill in a required field.');
   }
if(!(($mypassword)==($mypassword2))){
	die('Retype your password please');
}
   
$usr=$_POST['myusername'];
if(!get_magic_quotes_gpc()){
      $usr = addslashes($usr);
   }
$q = "select * from $tbl_name where name = '$usr';";

$rsult = mysql_query($q,$conn);

if((mysql_numrows($rsult) > 0)){
		
   $use = $_POST['myusername'];
   die("Sorry, the username: <strong>$use</strong> is already taken, please pick another one.");
   echo "<meta http-equiv=\"Refresh\" content=0;url=\"index.php\">";
   }
$md5pass = ($_POST['mypassword']);
$userdude=$_POST['myusername'];
$_SESSION['reguname'] = $_POST['myusername'];
$newkid = "INSERT INTO $tbl_name (name, password) values ('$userdude', '$md5pass')";
$_SESSION['regresult'] = mysql_query($newkid,$conn);
$_SESSION['registered'] = true;
echo "<meta http-equiv=\"Refresh\" content=0;url=\"index.php\">";

ob_end_flush();

?>
