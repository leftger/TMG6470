<?php
session_start();
if(!isset($_SESSION['myusername'])){
header("location:index.html");
}
?>
<?php include("navbar.php"); ?>
	<html>
		<head>
			<link rel = "stylesheet" type="text/css" href=" main.css" >
		</head>
		<div id="page">
		<div id="barackswrap">			
		<img src="BarackObama2005portrait.png">
		</div>
		<div id="graphbox">
		<img src = "obamagraph.php">
		</div>
		<div id="comment_box">
		<a href="">Comment</a>
		<div id="Post_a_Comment" class="comments">
			<form action="comment.php" method="post">
			Your Say: <br /><textarea type="text" name="comment" rows="7" columns="40"></textarea>
			<input type="submit" />
			</form>
		
		</div>
		</div>
	</div>
	</html>


