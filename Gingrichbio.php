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
	<link rel = "stylesheet" type="text/css" href="BioCSS.css" >
</head>
<div id="box">
<table class="cooltable">
<tr><td  class="side" width="20%">
<div id="minibox">
<h3>Newt Gingrich</h3>
<div id="barackswrap">			
<img src="CandidatePics/Gingrinch.png">
</div>
<br />
</br></br>
	
<div class="news">
A mere forty years ago, beach volleyball was just beginning. No bureaucrat would have invented it, and that's what freedom is all about.
</br>
<a href="http://www.brainyquote.com/quotes/authors/n/newt_gingrich.html">
-Newt Gingrich
</a>
</div>
</br>

<div class="news">
An energy tax punishes senior citizens, it punishes rural Americans, if you use electricity it punishes you. This bill will increase your cost of living and may kill your job.
</br>
<a href="http://www.brainyquote.com/quotes/authors/n/newt_gingrich.html">
-Newt Gingrich
</a>
</div>
</br>


<div class="news">
And by the way I don't object if people want to attack me, that's their right. All I'm suggesting that it's not going to be very effective and that people are going to get sick of it very fast. And the guys who attacked each other in the debates up to now, every single one of them have lost ground by attacking.
</br>
<a href="http://www.brainyquote.com/quotes/authors/n/newt_gingrich.html">
-Newt Gingrich
</a>
</div>
</br>

<div class="news">
And my point was one I think that you'd agree with, which is there's no room in America for a black racist, a Latino racist, or a white racist, or an Asian racist, or a Native American racist. Now, we're either color blind or we're not color blind.
</br>
<a href="http://www.brainyquote.com/quotes/authors/n/newt_gingrich.html">
-Newt Gingrich
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
			<h1>Top Rated Comments for Newt Gingrich:</h1>
			<?php include("readcomments.php"); ?>
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
<a href="http://en.wikipedia.org/wiki/Newt_Gingrich">
Newt Gingrich</a>
</br>
Newton Leroy "Newt" Gingrich (born Newton Leroy McPherson; June 17, 1943) is an American politician, author, and political consultant who served as the 58th Speaker of the U.S. House of Representatives from 1995 to 1999. He represented Georgia's 6th congressional district as a Republican from 1979 until his resignation in 1999. He is a candidate for the 2012 Republican Party presidential nomination.
</div>

<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Newt_Gingrich">
Congressional Campaigns</a>
</br>
In 1974, Gingrich made his first bid for political office as the Republican candidate in Georgia's 6th congressional district, which stretched from the southern Atlanta suburbs to theAlabama state line. He lost to 20-year incumbent Democrat Jack Flynt by 2,770 votes. Gingrich ran up huge margins in the more suburban areas of the district, but was unable to overcome Flynt's lead in the more rural areas. Gingrich's relative success came as a considerable shock on two fronts. Flynt had never faced a serious challenger indeed, Gingrich was only the second Republican to even run against him. Additionally, 1974 was a disastrous year for Republicans nationally due to fallout from the Watergate scandal.
</div>


<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Newt_Gingrich">
Speaker of the House</a>
</br>
Legislation proposed by the 104th United States Congress included term limits for Congressional Representatives, tax cuts, welfare reform, and a balanced budget amendment, as well as independent auditing of the finances of the House of Representatives and elimination of non-essential services such as the House barbershop and shoe-shine concessions. Following Gingrich's first two years as House Speaker, the Republican majority was re-elected in the 1996 election, the first time Republicans had done so in 68 years, and the first time simultaneously with a Democratic president winning re-election.
</div>

</td>
</tr>
</table>	
</div>
</body>
</html>
		


