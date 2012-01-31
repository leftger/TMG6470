
<html>
	<head>
	<!--<link rel = "stylesheet" type="text/css" href=" main.css" >-->
	<style type="text/css">
		#sign {
			display:block;
			width:70%;
			height:50%;
			background-color:#696969;
			margin-left:auto;
			margin-right:auto;
			margin-top: 200px;
			padding: 50px;
		}
	</style>
	</head>
<body>
<?php include("navbar2.php"); ?>
<div id="sign">
<form action="register.php" method="post">
	Username: <input type="text" name="myusername"></input><br />
	Password: <input type="password" name="mypassword"></input><br />
	Re-type-Password:<input type="password" name="mypassword2"></input><br /><br />
	<?php
	// This was for reCaptcha -- don't need it here :)
	require_once('recaptchalib.php');
  	$publickey = "6LfB17oSAAAAADzAJWHF6CiqcDb6zRwc0ciTWzBP"; // you got this from the signup page
  	echo recaptcha_get_html($publickey) . "<br />";
?>
	<input type="submit" />
</form>
</div>
</body>
</html>