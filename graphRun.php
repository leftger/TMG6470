<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	#box {
		background-color:#B3B3B3; width: 90%; margin-top: 100px; margin-left: auto; margin-right: auto; padding-top: 50px;
	}
	#minibox {
		background-color:#F0F0F0; border:#F4F5F5; border-style:solid;
	}
	</style>
</head>
<body>
<?php include("navbar.php"); ?>
<div id="box">

<table style="column-count:3" width="100%">
<tr><td width="15%" valign="top">
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
<b>Select the candidates whose graphs you would like to see.</b><br />
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
<br />
<br />
<a style="text-decoration: none; color: green" href="http://www.ebrueggeman.com/phpgraphlib">PHPGraphLib</a>
<br />
<!--<image src="graphTest2.php" alt="graph image">-->
</td>
<td width="70%" valign="middle">
<iframe src="" name="graph" width="100%" height="900px" frameborder="0"></iframe>
</td>
<td width="15%" valign="top">
<div id="minibox">
<h3>Campaign Financing</h3>
<br />

<form name="input" action="graphTest2.php" method="post" target="graph">
<b>Select the candidates whose graphs you would like to see.</b><br />
<input type="checkbox" name="vehicle[]" value="Romney" /> Mitt Romney<br />
<input type="checkbox" name="vehicle[]" value="Gingrich" /> Newt Gingrich<br />
<input type="checkbox" name="vehicle[]" value="Santorum" /> Rick Santorum<br />
<input type="checkbox" name="vehicle[]" value="Paul" /> Ron Paul<br />
<input type="submit" value="Graph" />
</form>
</div>
</td>
</tr></table>	
</div>
</body>
</html>