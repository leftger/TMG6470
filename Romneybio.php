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
			<link rel = "stylesheet" type="text/css" href=" BioCSS.css" >
			<style type="text/css">
				#mittswrap {
					position: relative; width: 250px; overflow:hidden;
				}
				#mittswrap img {margin-left: -100px;}
				}
			</style>
</head>
<div id="box">
<table class="cooltable">
<tr><td  class="side" width="20%">
<div id="minibox">
<h3>Mitt Romney</h3>
<div id="mittswrap">			
<img src="CandidatePics/MittRomney.png">
</div>
<br />
</br></br>
	
<div class="news">
America cannot continue to lead the family of nations around the world if we suffer the collapse of the family here at home.
</br>
<a href="http://www.brainyquote.com/quotes/authors/m/mitt_romney.html">
-Mitt Romney
</a>
</div>
</br>

<div class="news">
America is not better off than it was $1.8 trillion dollars ago.
</br>
<a href="http://www.brainyquote.com/quotes/authors/m/mitt_romney.html">
-Mitt Romney
</a>
</div>
</br>


<div class="news">
And a special thank you to the citizens of Massachusetts: You are paying all the taxes, creating all the jobs, raising all the children. This government is yours. Thank you for letting me serve you. I love this job.
</br>
<a href="http://www.brainyquote.com/quotes/authors/m/mitt_romney.html">
-Mitt Romney
</a>
</div>
</br>

<div class="news">
And the American people are the greatest people in the world. What makes America the greatest nation in the world is the heart of the American people: hardworking, innovative, risk-taking, God- loving, family-oriented American people.
</br>
<a href="http://www.brainyquote.com/quotes/authors/m/mitt_romney.html">
-Mitt Romney
</a>
</div>
</br>

</td>
<td >
<table >
<tr >
<td>
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
			<h1>Top Rated Comments for Mitt Romney:</h1>
			<?php include("Romneycomments.php"); ?>
		</div>
	</div>
</div>
</td>
</tr>
<tr>
<td>
<div id="graphBot">
<img src = "CandidatePics/GOPcontenderhigh.jpg">
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
<a href="http://en.wikipedia.org/wiki/Mitt_Romney">
Mitt Romney
</a>
</br>
Willard Mitt Romney (born March 12, 1947) is an American businessman and politician. He was the 70th Governor of Massachusetts from 2003 to 2007 and is a candidate for the 2012 Republican Party presidential nomination.
</div>

<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Mitt_Romney">
Management consulting
</a>
</br>
Romney was heavily recruited and, after graduation, chose to remain in Massachusetts to work for Boston Consulting Group (BCG), thinking that working as a management consultantto a variety of companies would prepare him for a future job as a chief executive. Romney was part of a 1970s wave of top graduates who chose to go into consulting rather than join a major company directly. Romney's legal and business education proved useful in his job, and he became a rising star while applying BCG principles such as the growth-share matrix.
</div>


<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Mitt_Romney">
Tenure, 2003-2007
</a>
</br>
Romney was sworn in as the 70th governor of Massachusetts on January 2, 2003. Both houses of the Massachusetts state legislature held large Democratic majorities. He picked his cabinet and advisors more on managerial abilities than partisan affiliation. Upon entering office in the middle of a fiscal year, Romney faced an immediate $650 million shortfall and a projected $3 billion deficit for the next year. Unexpected revenue of $1.0Ð1.3 billion from a previously enacted capital gains tax increase and $500 million in unanticipated federal grants decreased the deficit to $1.2Ð1.5 billion. Through a combination of spending cuts, increased fees, and removal of corporate tax loopholes, the state ran surpluses of around $600Ð700 million for the last two full fiscal years Romney was in office, although it began running deficits again after that.
</div>

</td>
</tr>
</table>	
</div>
</body>
</html>
		


