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
	<style type="text/css">
	#box {
		background-color:#B3B3B3; width: 90%; margin-top: 100px; margin-left: auto; margin-right: auto; padding-top: 50px;
	}
	td.side {
		background-color:#F0F0F0; border:#F4F5F5; border-style:solid; padding-left: 10px; padding-right: 10px;
	}
	#graphTop {
		background-color:white; width: 60%; height: 275px;
	}
	#graphBot {
		background-color:#B3B3B3; width: 60%;
		margin-left: -10px;
		margin-right: auto;
		position: absolute;
		top: 127%;
	}
	#graphBot img {
		padding: 15px;
		width: 74.5%;
		filter:alpha(opacity=80);
		position: absolute;
	}
	.news {
		display:block;
		background-color:#777777;
		/*#000033*/
		padding: 5px;
		font-size: 11px;
	}
	.news a{
		text-decoration: none;
		font-family:"Verdana", Verdana, sans-serif;
		color:white;
		font-size: 15px;
	}
	.news a:hover {
		color:red;
	}
	#barackswrap{position: absolute; top: 30%;}
	#CommentFeed{width: 600px; height: 620px; background: white; z-index:4; position: absolute; top: 35%; right: 24.25%;}
	
	#prettycomment{z-index: 7; background-color: white; position: absolute; top: -391px; height: 70px; width: 600px;}
	#prettycomment a{padding-left: 30px; text-align: center; text-decoration: none; color: black; font-size: 25px; font-family:Arial, Helvetica, sans-serif; font-weight:800; text-align: center;}
	#prettycomment a:hover {opacity: .5;}
	#Post_a_Comment{display:none}
	#graybox{background: #eeeeed; width: 90%; height: 90%; margin: 15px;}
	#prettycomment:hover #Post_a_Comment form{font-family: Arial, Helvetica, sans-serif; font-weight: 900; display: block; padding: 20px; padding-left: 35px; position: absolute; top: 0%; left: 0px; }
	#prettycomment:hover #Post_a_Comment{border-style:solid; border-width:2px; border-color: #eeeedd; display: block; background-color:#FFFFF0; position: inherit; right: 0%; top: 105%; width: 100%; height: 300%; }
	#reading_box{width: 200px; height: 300px; background: yellow; z-index:5; position: absolute; top: 10%; right: 0%;}
	#reading_box{text-decoration: none; color: black; font-size: 17px; position: absolute; top: 30%;}
	#reading_box a:hover {opacity: .5;}
	
	#comments{position: absolute; top: -270px; right: -565px; font-weight:800; background-color:#eeeeed; font-family: Arial, Helvetica, sans-serif; font-size: 16px; width: 500px; height: 520px; padding-left: 30px; padding-top: 15px;}
	#graphbox{position: absolute; top: 50%; left: 0%;}
	
	h1{font-size: 22px;}
	h3{position: absolute; top: 22%;}
	table.cooltable{height: 1100px; }
	</style>
</head>
<div id="box">
<table class="cooltable">
<tr><td  class="side" width="28%">
<div id="minibox">
<h3>President Barack Obama</h3>
<div id="barackswrap">			
<img src="BarackObama2005portrait.png">
</div>
<br />
</br></br>



</br>
</br>
</br>
</br>
</br>	
</br>
</br>
</br>
</br>		
<div class="news">
<a href="http://www.cnn.com/2012/01/30/politics/fl-insiders-survey/index.html">
Florida Insiders Survey: 'Romney stepping up his game' -CNN
</a>
</br>
As the Republican presidential campaign heads toward a critical showdown in the Florida primary, former Massachusetts Gov. Mitt Romney appears to have rebounded...
</div>

</br>	
<div class="news">
<a href="http://politics.blogs.foxnews.com/2012/01/30/final-data-dump-florida-early-voting-results">
Final data dump: Florida early voting results -Fox News
</a>
</br>
The Florida Republican Party has released the final numbers of early and absentee voting to be revealed ahead of Tuesday's primary vote.
</div>


</br>	
<div class="news">
<a href="http://www.nytimes.com/2012/01/29/us/politics/the-man-behind-gingrichs-money.html?_r=1&ref=politics">
The Man Behind Gingrich&rsquo;s Money -The New York Times
</a>
</br>
Sheldon Adelson, who presides over a global empire of casinos, hotels and convention centers and is by some estimates worth as much as $22 billion, is a large financial source for Newt Gingrich.
</div>

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
			<form action="Romneysubmit.php" method="post">
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
			<?php include("Romneycomments.php"); ?>
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

<br />
<div class="news">
<a href="http://www.gallup.com/poll/152240/Romney-Ties-Obama-Swing-States-Gingrich-Trails.aspx">
Romney Ties Obama in Swing States; Gingrich Trails -Gallup
</a>
</br>
Voters in 12 key swing states and nationally are split between Barack Obama and Mitt Romney in their 2012 preferences, but pick Obama over Newt Gingrich. Gingrich and Romney are nearly tied again in national GOP nominee preferences.
</div>

</br>	
<div class="news">
<a href="http://www.bbc.co.uk/news/world-us-canada-16696347">
Wealthy Romney reveals 14% taxes -BBC
</a>
</br>
US Republican presidential candidate Mitt Romney expects to pay about $6.2m (�4m) in taxes on income of $42.5m in the last two years.
That makes for a tax rate of 13.9% in 2010 and an expected rate of 15.4% in 2011, his campaign said.
</div>


</br>	
<div class="news">
<a href="http://www.latimes.com/news/politics/la-pn-still-down-in-florida-polls-gingrich-kicks-off-fivecity-dash-20120130,0,6269530.story?track=rss">
Still down in Florida polls, Gingrich kicks off five-city dash -LA Times
</a>
</br>
Kicking off a five-city dash around Florida a day before the state holds a critical primary, Newt Gingrich said on Monday that he was the only GOP candidate who could beat President Obama and slammed rival Mitt Romney as liberal...
</div>

</td>
</tr>
</table>	
</div>
</body>
</html>
		


