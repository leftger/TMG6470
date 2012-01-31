<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#box {
		background-color:#B3B3B3; width: 90%; margin-top: 100px; margin-left: auto; margin-right: auto; padding-top: 50px;
	}
	td.side {
		background-color:#F0F0F0; border:#F4F5F5; border-style:solid; padding-left: 10px; padding-right: 10px;
	}
	#graphTop {
		background-color:white; width: 100%; height: 100%;
	}
	#graphBot {
		background-color:#B3B3B3; width: 100%;
		margin-left: 100px;
		margin-right: auto;
	}
	#graphBot img {
		padding: 20px;
		opacity:0.4;
		filter:alpha(opacity=40);
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
	#foot {
		display:block;
		z-index:2;
		text-align:center;
		font-family: Impact, Charcoal, sans-serif;
		background-color:#D3D3D3;		
		padding: 5px;
		opacity:0.4;
		filter:alpha(opacity=40);
		background-image: url("CandidatePics/capitol_hill_lg.jpg");
		margin-left:8%;
		margin-right:15%;
		width: 450px;
		height: 230px;
	}

	</style>
</head>
<body>
<?php include("navbar.php"); ?>
<div id="box">

<table style="column-count:3" width="100%">
<tr><td width="15%" valign="top" class="side">
<div id="minibox">
<h3>Gallup Polls Candidate Popularity</h3>
<!--<img src="graph.php();?>-->
<br />
<!--<select action="graph.php" method="post">
  <option value="Romney"; name="name">Mitt Romney</option>
  <option value="Gingrich"; name="name">Newt Gingrich</option>
  <option value="Santorum"; name="name">Rich Santorum</option>
  <option value="Paul"; name="name">Ron Paul</option>
</select>-->
<form name="input" action="graphTest.php" method="post" target="graph">
<b>Select the candidates whose graphs you would like to see.</b><br /></br>
<input type="checkbox" name="vehicle[]" value="Romney" /> Mitt Romney<br />
<input type="checkbox" name="vehicle[]" value="Gingrich" /> Newt Gingrich<br />
<input type="checkbox" name="vehicle[]" value="Santorum" /> Rick Santorum<br />
<input type="checkbox" name="vehicle[]" value="Paul" /> Ron Paul<br />
<input type="submit" value="Graph" />
<!--<a href="graphTest2.php" target="graph">Scrabble</a>-->
</form>
</div>
</br></br>

<!--<br /><b>Type in and Submit the Candidate's Last Name </b>

<form name="input" action="graph.php" method="get">
Candidate: <input type="text" name="user" />
<input type="submit" value="Submit" />
</form>-->

<a style="text-decoration: none; color: green" href="http://www.ebrueggeman.com/phpgraphlib">PHPGraphLib</a>
</br>
<!--<image src="graphTest2.php" alt="graph image">-->
	
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
<td width="70%" valign="middle">
<table style="column-count:1" width="100%">
<tr height="400px">
<td>
<div id="graphTop">
<iframe src="" name="graph" width="100%" height="700px" frameborder="0"></iframe>
</div>
</td>
</tr>
<tr>
<td>
<div id="graphBot">
<!--<img src="CandidatePics/capitol_hill_lg.jpg" alt="Capitol Hill nataliaallen.wordpress.com">-->
<div id="foot">
Nameless Website Gerzain Rosas, Michael DuPlessis, Thane Miller</br></br>
Developed for MIT's IAP 2012 6.470 Web Development Competition.</br></br>
Thank You to govtrack.us, Gallup, YouTube, Facebook, PhpGraphLib
</div>
</div>

</td>
</tr>
</table>
</td>
<td width="15%" valign="top" class="side">
<div id="minibox">
<h3>Campaign Financing</h3>
<br />
</br>
<form name="input" action="graphTest2.php" method="post" target="graph">
<b>Select the candidates whose graphs you would like to see.</b><br /></br>
<input type="checkbox" name="vehicle[]" value="Romney" /> Mitt Romney<br />
<input type="checkbox" name="vehicle[]" value="Gingrich" /> Newt Gingrich<br />
<input type="checkbox" name="vehicle[]" value="Santorum" /> Rick Santorum<br />
<input type="checkbox" name="vehicle[]" value="Paul" /> Ron Paul<br />
<input type="submit" value="Graph" />
</form>
</br>
</br>

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

</div>
</td>
</tr>
</table>	
</div>
</body>
</html>