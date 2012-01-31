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
</head>
<div id="box">
<table class="cooltable">
<tr><td  class="side" width="20%">
<div id="minibox">
<h3>Ron Paul</h3>
<div id="barackswrap">			
<img src="CandidatePics/Paul.jpeg">
</div>
<br />
</br></br>
	
<div class="news">
1913 wasn't a very good year. 1913 gave us the income tax, the 16th amendment and the IRS.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/ron_paul.html">
-Ron Paul
</a>
</div>
</br>

<div class="news">
A system of capitalism presumes sound money, not fiat money manipulated by a central bank. Capitalism cherishes voluntary contracts and interest rates that are determined by savings, not credit creation by a central bank.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/ron_paul.html">
-Ron Paul
</a>
</div>
</br>


<div class="news">
All initiation of force is a violation of someone else's rights, whether initiated by an individual or the state, for the benefit of an individual or group of individuals, even if it's supposed to be for the benefit of another individual or group of individuals.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/ron_paul.html">
-Ron Paul
</a>
</div>
</br>

<div class="news">
Another term for preventive war is aggressive war - starting wars because someday somebody might do something to us. That is not part of the American tradition.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/ron_paul.html">
-Ron Paul
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
			<form action="paulsubmit.php" method="post">
			<div><?php echo $_SESSION['myusername']. "'s"; ?> say: <br /> <textarea type="text" name="comment" rows="7" columns="40"></textarea></style></div>
			<div id="submit_wrap">
			<input type="submit" />
			</div>
			</form>
		</div>
		</div>
		</div>
		<div id="comments">
			<h1>Top Rated Comments for Ron Paul:</h1>
			<?php include("Paulcomments.php"); ?>
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
Ron Paul</a>
</br>
Ronald Ernest "Ron" Paul (born August 20, 1935) is an American medical doctor, author, Republican United States Representative, and a candidate for the 2012 Republican Party presidential nomination. He has been an outspoken critic of American foreign and monetary policies, recognized for sharply opposing his own party on many issues. Since 1997, Paul has represented Texas's 14th congressional district, which covers an area south and southwest of Houston that includes Galveston. Paul serves on the House Committees on Foreign Affairs and Financial Services, and on the Joint Economic Committee, as well as chairman of the Financial Services Subcommittee on Domestic Monetary Policy and Technology.
</div>

<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Newt_Gingrich">
Early congressional career (1976-1984)</a>
</br>
While still a medical resident in the 1960s, Paul was influenced by Friedrich Hayek's The Road to Serfdom, which caused him to read many publications by Ludwig von Mises and Ayn Rand. He came to know economists Hans Sennholz and Murray Rothbard well, and credits to them his interest in the study of economics.
He came to believe that what the Austrian School economists wrote was becoming true on August 15, 1971, when President Richard Nixon "closed the gold window" by implementing the U.S. dollar's complete departure from the gold standard. That same day, the young physician decided to enter politics, saying later, "After that day, all money would be political money rather than money of real value. I was astounded."
</div>


<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Newt_Gingrich">
Relationship with district</a>
</br>
Paul's congressional district is larger than Massachusetts, with 675 miles (1,086 km) of Gulf of Mexico coastline between Houston and Rockport, Texas, including some 22 counties. Paul opposes federally funded flood insurance. In a rural region known for ranching and rice farms, Paul opposes farm subsidies.
Paul has added earmarks, such as for Texas shrimp promotion, but routinely votes against most spending bills returned by committee. Paul compared his practice to objecting to the tax system yet taking all one's tax credits: "I want to get their money back for the people."
</div>

</td>
</tr>
</table>	
</div>
</body>
</html>
		


