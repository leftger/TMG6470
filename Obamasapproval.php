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
			<?php echo $_SESSION['myusername']. "'s"; ?> say: <br /><textarea type="text" name="comment" rows="7" columns="50"></textarea>
			<div id="submit_wrap">
			<input type="submit" />
			</div>
			</form>
		</div>
		</div>
		<div id="reading_box">
		<a href="">Read user Comments</a>
		<div id="comments">Top Rated Comments:<br />
			<br />
			<?php include("readcomments.php"); ?>
			
		</form>
		</div>
		</div>
	</div>
	</html>


