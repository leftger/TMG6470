<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>TMG6470</title>
		<link rel = "stylesheet" type="text/css" href=" main.css" >
		<script type="text/javascript" src="jquery/js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="SlideAction.js"></script>
		<link rel = "stylesheet" type="text/css" href="Slidecss.css">
	</head>
	<body>
		<!--<div id='login_box'></div>
			 		<form action="checklogin.php" method="post">
						Username: <input type="text" name="myusername"> </input><br />
						Password: <input type="password" name="mypassword"> </input><br />
						<input type="submit" />
					<?php
						$logged_in="";
						if(isset($_SESSION['myusername'])){
							$logged_in = "<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\"ONCLICK=window.location.href=\"logout.php\">";
						echo $logged_in;
						}?> 
					</form>-->
		<div id="smallheader">
		<div id="login" class="nav_right">
		<a href=""><?php
			if (isset($_SESSION['myusername'])){echo "Logout";}
			else{echo "Login";}
			?></a>
			 		<div id='login_box'>
			 		<form action="checklogin.php" method="post">
						Username: <input type="text" name="myusername"> </input><br />
						Password: <input type="password" name="mypassword"> </input><br />
						<input type="submit" />
						<?php
						if(isset($_SESSION['myusername'])){
					echo "</li id= \"logout_button\">
					<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\" ONCLICK=\"window.location.href='logout.php'\">";}
					?>
					</form>
					</div>
		</div>
		<div id="welcome">
			<?php
			if (isset($_SESSION['myusername']))
			{echo "Welcome, " . $_SESSION['myusername'] . "";}
			else{echo "Please log in :] or sign up!";}
				?>
		</div>
		<div id="line">
		<img src="redline.png" alt="line" width="100%" height="4px">
		</div>
		<div id="navigation_bar" >
			<div id="logo_box">
		<img src= "logotransparent.png" alt="donkey V Elephant" width="175px" height="125px" >
		</div>
			<ul class="nav_bar">
				<li id="home" class="nav_bar">
			 		<a href="index.php">Home</a>
			 	</li>
			 	<li id="statistics" class="nav_bar">
			 		<a href="graphTest.html">Statistics</a>
			 			 
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
			 		
			 		<ul>
			 			<li><a href="http://en.wikipedia.org/wiki/Barack_Obama" class="candidates_bar">Barack Obama</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Newt_Gingrich" class="candidates_bar">Newt Gingrich</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Ron_paul" class="candidates_bar">Ron Paul</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Rick_Santorum" class="candidates_bar">Rick Santorum</a></li>
			 			<li><a href="http://en.wikipedia.org/wiki/Mitt_Romney" class="candidates_bar">Mitt Romney</a></li>
			 		</ul>
			 	</ul>
			 	<ul class="nav_right">
			 	<!--</li>
			 	<li id="login" class="nav_right">
			 		
			 		<a href="">Login/Logout</a>
			 		<div id='login_box'></div>
			 		<form action="checklogin.php" method="post">
			 			<?php
			 			// This was for reCaptcha -- don't need it here :)
			 			/*require_once('recaptchalib.php');
  						$publickey = "6LfB17oSAAAAADzAJWHF6CiqcDb6zRwc0ciTWzBP"; // you got this from the signup page
  						echo recaptcha_get_html($publickey) . "<br />";*/
  						?>
						Username: <input type="text" name="myusername"> </input><br />
						Password: <input type="password" name="mypassword"> </input><br />
						<input type="submit" />
					<?php
						$logged_in="";
						if(isset($_SESSION['myusername'])){
							$logged_in = "<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\"ONCLICK=window.location.href=\"logout.php\">";
						echo $logged_in;
						}?> 
					</form>
<<<<<<< HEAD

				<?php
				if(isset($_SESSION['myusername'])){
					echo "</li id= \"logout_button\">
			 		<FORM>
						<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\" ONCLICK=\"window.location.href='logout.php'\"> 
					</FORM>
			 	</li>";
				}
				?>

=======
					<?php
					if (isset($_SESSION['myusername'])){
						echo "</li id= \"logout_button\">
			 				<FORM>
								<INPUT TYPE=\"BUTTON\" VALUE=\"Logout\" ONCLICK=\"window.location.href='logout.php'\"> 
							</FORM>
			 				</li>";
					}
					?>
>>>>>>> e2f1ef1cc2f7090e513bc97b0bea49f8f90f1e0f
			 	</li>-->
			 	<li id="Signin" class="nav_right">
			 	<a href="signinpage.php">Signin</a>
			 	</li>

			</ul>
		</div>
		</div>
		<div id="large_box">
		<div id="flag_box">
		<img src="us flag.png" alt="flag" width="100%" height="100%">
		</div>

		<div id="title_wrap">
		<p>Boys in the BATTLE >:O</p>
		</div>
		<div id="accordian_box">
		<ul id="accordion">
			<li>
				<a href="candidate.php?id=404587">
  				<img src="CandidatePics/gingrich400.jpg" alt="Newt Gingrich"   />
  				</a>
  				<div class="desc">Newt Gingrich</div>
			</li>
			
			<li>


				<a href="candidate.php?id=408649">
  				<img src="CandidatePics/rick-perry.jpg" alt="Rick Perry"  />

  				</a>
  				<div class="desc">Rick Perry</div>
  				
			</li>
			<li>
				<a href="candidate.php?id=400311">
 			 	<img src="CandidatePics/RonPaul.jpg" alt="Ron Paul"   />
 		 		</a>
 		 		<div class="desc">Ron Paul</div>	
			</li>
			<li>
				<a href="candidate.php?id=300085">
  				<img src="CandidatePics/Santorum400.jpg" alt="Rick Santorum"  />
  				</a>
  				<div class="desc">Rick Santorum</div>	
			</li>
			<li>
				<a href="http://www.google.com">
 				<img src="CandidatePics/romney400.jpg" alt="Mitt Romney"  />
				</a>
				<div class="desc">Mitt Romney</div>	
			</li>
			<li>
				<a href="candidate.php?id=400629">
				<a href="Obamasapproval.php">
  				<img src="CandidatePics/Obama.jpg" alt="Barack Obama" /> <!--width=400px-->
  				</a>
  				<div class="desc">Barack Obama</div>
			</li>
		</ul>
	</div>
	</div>
	</body>
	</html>
