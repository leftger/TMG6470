<?php
ob_start();
//reCaptcha stuff, don't need it here :)
/*  require_once('recaptchalib.php');
  $privatekey = "6LfB17oSAAAAAA8uDTC6pG_eAMxmAK1m1DjofUft";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

if (!$resp->is_valid) {
// What happens when the CAPTCHA was entered incorrectly
  die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
       "(reCAPTCHA said: " . $resp->error . ")");
}
else {*/
// Your code here to handle a successful verification
$host="18.194.1.88:3306"; // Host name 
$username="TMG6470"; // Mysql username 
$password="snett"; // Mysql password 
$db_name="candidates_2012"; // Database name 
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM $tbl_name WHERE name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:index.php");
}
else {
echo "Wrong Username or Password";
}
//this was for reCaptcha
//}
ob_end_flush();
?>