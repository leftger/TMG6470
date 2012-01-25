<!DOCTYPE html>
<html>
	<head>
	<title></title>
	<link rel = "stylesheet" type="text/css" href=" main.css" >
	</head>
	<body>
		<div id="large_box">
		<div id="header">
		<div id="smallheader">
		<div id="line">
		<div id="logo_box">
		<img src= "logotransparent.png" alt="donkey V Elephant" width="300px" height="215px" >
		</div>
		
		<img src="blackline.png" alt="line" width="1110px" height="4px">
		</div>
		<div id="navigation_bar" >
			<ul>
				<li id="home" class="nav_bar">
			 		<a href="index.html">Home</a>
			 		|
			 	</li>
			 	<li id="statistics" class="nav_bar">
			 		<a href="http://en.wikipedia.org/wiki/Statistics">Statistics</a>
			 			 |
			 		<ul>
			 			
			 			<li><a href="http://en.wikipedia.org/wiki/Timeline" class="Stats_bar">Timeline</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Newt_Gingrich" class="Stats_bar">Districts leading</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Ron_paul" class="Stats_bar">Bills created</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Rick_Santorum" class="Stats_bar">Something else</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Mitt_Romney" class="Stats_bar">Something else</a></li>
			 		</ul>
			 	</li>
			 	<li id="issues" class="nav_bar">
			 		<a href="">Issues</a>
			 		|
			 		<ul>
			 			<li><a href="http://en.wikipedia.org/wiki/Economy" class="issues_bar">Economy</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/The_War" class="issues_bar">The War</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Social_Issues" class="issues_bar">Social Issues</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Abortion" class="issues_bar">Abortion</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Scandals" class="issues_bar">Scandals</a></li>
			 		</ul>
			 	</li>
			 	<li id="candidates" class="nav_bar">
			 		<a href="">Candidates</a>
			 		|
			 		<ul>
			 			<li><a href="Obamasapproval.php" class="candidates_bar">Barack Obama</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Newt_Gingrich" class="candidates_bar">Newt Gingrich</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Ron_paul" class="candidates_bar">Ron Paul</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Rick_Santorum" class="candidates_bar">Rick Santorum</a></li>
			 			<li><a href="Romney.html" class="candidates_bar">Mitt Romney</a></li>
			 		</ul>
			 	</li>
			 	<li id="login" class="nav_bar>">
			 		
			 		<a href="">Login</a>
			 		<div id='login_box'></div>
			 		<form action="checklogin.php" method="post">
						Username: <input type="text" name="myusername"> </input><br />
						Password: <input type="password" name="mypassword"> </input><br />
						<input type="submit" />
						<?php
						$logged_in="";
						if(isset($_SESSION['myusername'])){
							$logged_in = "<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\"ONCLICK=\"window.location.href=\"logout.php\">";
						echo $logged_in;
						}?>
					</form>
			</ul>
		</div>
		</div>
		</div>
		<p>
			<?php
			if (isset($_SESSION['myusername']))
			{
				echo "WELCOME: " . $_SESSION['myusername'] . "!";
			}
			else{
				echo "Please log in :)";
			}
			?>
		</p>
		<div id="graphbox">
		<img src = "obamagraph.php" position="absolute" left="200px">
		</div>
</body>
</html>

