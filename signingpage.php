
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
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
		}
		#sign img {
			margin-top: -50px;
			z-index: -1;
			opacity:0.2;
			filter:alpha(opacity=20);
			margin-left: 250px;
		}
		#sign form {
			margin-top: -360px;
			font-family: Impact,Charcoal, sans-serif;
			display:block;
			background-color:#777777;
			padding: 20px;
			border-radius: 5px;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border:1px solid red;
		}
		
	</style>
	</head>
<body>
<?php include("navbar2.php"); ?>
<div id="sign">
<img src="logotransparent.png">
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