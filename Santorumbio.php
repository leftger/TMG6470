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
<h3>Rick Santorum</h3>
<div id="barackswrap">			
<img src="CandidatePics/RickSantorum.png">
</div>
<br />
</br></br>
		
<div class="news">
Candidly, I believe most corporations actually don't mind big government.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/rick_santorum.html">
-Rick Santorum
</a>
</div>
</br>

<div class="news">
Every society in the history of man has upheld the institution of marriage as a bond between a man and a woman. Why? Because society is based on one thing: that society is based on the future of the society. And that's what? Children. Monogamous relationships.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/rick_santorum.html">
-Rick Santorum
</a>
</div>
</br>


<div class="news">
I love it when the left and when the president say, 'Don't try to impose your values on us, you folks who hold your Bibles in your hand and cling to your guns.' They have values too. Our values are based on religion, based on life. Their values are based on a religion of self.
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/rick_santorum.html">
-Rick Santorum
</a>
</div>
</br>

<div class="news">
I mean the fact is that some of this information that we have found out that led to Usama bin Laden actually came from these enhanced interrogation technique
</br>
<a href="http://www.brainyquote.com/quotes/authors/r/rick_santorum.html">
-Rick Santorum
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
			<h1>Top Rated Comments for Rick Santorum:</h1>
			<?php include("Santorumcomments.php"); ?>
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
<a href="http://en.wikipedia.org/wiki/Rick_Santorum">
Rick Santorum
</a>
</br>
Richard John "Rick" Santorum (born May 10, 1958) is a U.S Republican Party politician. He was a lawyer before becoming the Representative for suburban Pittsburgh in 1991 and Senator for Pennsylvania from 1995, before losing his seat in 2006 and returning to law, public policy and the media. He is presently a candidate for the 2012 Republican Party presidential primaries.
</div>

<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Rick_Santorum">
Early Political Career
</a>
</br>
Santorum first became actively involved in politics through volunteering for the late Senator John Heinz, a Republican from Pennsylvania. While working on his law degree, Santorum was an administrative assistant to Republican state senator Doyle Corman also serving as director of the Pennsylvania Senate's local government committee from 1981 to 1984, then director of its transportation committee.
</div>


<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Rick_Santorum">
Religious freedom and ideological diversity
</a>
</br>
Santorum sponsored the Workplace Religious Freedom Act (WRFA) with U.S. Senator John Kerry (D-MA).
In 2003, Santorum and fellow Republicans heard from Hillel, the Anti-Defamation League, and the Zionist Organization of America about combating anti-Semitism in American colleges. Santorum drafted language on "ideological diversity," which Race & Class magazine suggested was tantamount to "policing thought." Inside Higher Ed suggested that he was pandering to David Horowitz and had no deep-seated position on the legislation.
</div>

<br />
<div class="news">
<a href="http://en.wikipedia.org/wiki/Rick_Santorum">
Party leadership
</a>
</br>
In a 2002 PoliticsPA feature story designating politicians with yearbook superlatives, he was named the "Most Ambitious". 
As chairman of the Senate Republican Conference, Santorum directed the communications operations of Senate Republicans and was a frequent party spokesperson. He was the youngest member of the Senate leadership and the first Pennsylvanian to hold such a prominent position since Senator Hugh Scott was Republican leader in the 1970s. In addition, Santorum served on the Senate Agriculture Committee; the Senate Committee on Banking, Housing and Urban Affairs; the Senate Special Committee on Aging; and the Senate Finance Committee, of which he was the chairman of the Subcommittee on Social Security and Family Policy.
</div>

</td>
</tr>
</table>	
</div>
</body>
</html>
		


