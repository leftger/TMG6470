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
			<link rel = "stylesheet" type="text/css" href="BioCSS.css">
</head>
<body>
<div id="box">
<table class="cooltable">
<tr><td  class="side" width="20%">
<div id="minibox">
<h3>President Barack Obama</h3>
<div id="barackswrap">			
<img src="BarackObama2005portrait.png">
</div>
<br />
</br></br>
		
<div class="news">
A good compromise, a good piece of legislation, is like a good sentence; or a good piece of music. Everybody can recognize it. They say, 'Huh. It works. It makes sense.'
</br>
<a href="http://www.brainyquote.com/quotes/authors/b/barack_obama.html">
-Barack Obama
</a>
</div>
</br>
<div class="news">
After a century of striving, after a year of debate, after a historic vote, health care reform is no longer an unmet promise. It is the law of the land.
</br>
<a href="http://www.brainyquote.com/quotes/authors/b/barack_obama.html">
-Barack Obama
</a>
</div>
</br>

<div class="news">
Al Qaeda is still a threat. We cannot pretend somehow that because Barack Hussein Obama got elected as president, suddenly everything is going to be OK.
</br>
<a href="http://www.brainyquote.com/quotes/authors/b/barack_obama.html">
-Barack Obama
</a>
</div>
</br>
<div class="news">
America and Islam are not exclusive and need not be in competition. Instead, they overlap, and share common principles of justice and progress, tolerance and the dignity of all human beings.
</br>
<a href="http://www.brainyquote.com/quotes/authors/b/barack_obama.html">
-Barack Obama
</a>
</div>
</br>

</td>
<td >
<table width="100%">
<tr width="100%">
<td width="100%">
<div id="CommentFeed">
<div id="graphbox">
		<div id="prettycomment">
		<a href="">What do you have to share? Post a Comment!</a>
		<div id="Post_a_Comment" class="comments">
			<div id="graybox">
			<form action="comment.php" method="post">
			<div><?php echo $_SESSION['myusername']. "'s"; ?> say: <br /> <textarea type="text" name="comment" rows="7" columns="40"></textarea></style></div>
			<div id="submit_wrap">
			<input type="submit" />
			</div>
			</form>
		</div>
		</div>
		</div>
		<div id="comments">
			<h1>Top Rated Comments for Barack Obama:</h1>
			<?php include("readcomments.php"); ?>
		</div>
	</div>
</div>
</td>
</tr>
<tr>
<td>
<div id="graphBot">
<img src = "obamagraph.php">
</div>
</td>
</tr>
</table>
</td>
<td  class="side" width="20%">
<h3>Biographical Background</h3>
<div class="news">-from Wikipedia</div>
<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Obama">
Barack Obama</a>
</br>
Barack Hussein Obama II (born August 4, 1961) is the 44th and current President of the United States. He is the first African American to hold the office. Obama previously served as a United States Senator from Illinois, from January 2005 until he resigned following his victory in the 2008 presidential election.
</div>

</br>	
<div class="news">
<a href="http://en.wikipedia.org/wiki/Obama">
Chicago community organizer and Harvard Law School
</a>
</br>
Two years after graduating, Obama was hired in Chicago as director of the Developing Communities Project (DCP), a church-based community organization originally comprising eight Catholic parishes in Greater Roseland (Roseland, West Pullman and Riverdale) on Chicago's far South Side. He worked there as a community organizer from June 1985 to May 1988. During his three years as the DCP's director, its staff grew from one to thirteen. He helped set up a job training program, a college preparatory tutoring program, and a tenants' rights organization in Altgeld Gardens.
</div>


</br>	
<div class="news">
<a href="http://en.wikipedia.org/wiki/Obama">
University of Chicago Law School and civil rights attorney
</a>
</br>
In 1991, Obama accepted a two-year position as Visiting Law and Government Fellow at the University of Chicago Law School to work on his first book. He then served as a professor at the University of Chicago Law School for twelve years as a Lecturer from 1992 to 1996, and as a Senior Lecturer from 1996 to 2004 teaching constitutional law.
</div>


</br>	
<div class="news">
<a href="http://en.wikipedia.org/wiki/Obama">
State Senator: 1997-2004
</a>
</br>
Obama was elected to the Illinois Senate in 1996, succeeding State Senator Alice Palmer as Senator from Illinois's 13th District, which at that time spanned Chicago South Side neighborhoods from Hyde Park Ð Kenwood south to South Shore and west to Chicago Lawn. Once elected, Obama gained bipartisan support for legislation reforming ethics and health care laws. He sponsored a law increasing tax credits for low-income workers, negotiated welfare reform, and promoted increased subsidies for childcare.
</div>


</td>
</tr>
</table>	
</div>
</body>
</html>
		


