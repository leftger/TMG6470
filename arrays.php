<html>
<head>
</head></body>
<h3>Gallup Polls Candidate Popularity</h3>
<!--<img src="graph.php();?>-->
<br />
<!--<select action="graph.php" method="post">
  <option value="Romney"; name="name">Mitt Romney</option>
  <option value="Gingrich"; name="name">Newt Gingrich</option>
  <option value="Santorum"; name="name">Rich Santorum</option>
  <option value="Paul"; name="name">Ron Paul</option>
</select>-->
<!--<form name="input" action="arrays.php" method="post">
<b>Select the candidates whose graphs you would like to see.</b><br />
<input type="checkbox" name="vehicle[]" value="Romney" /> Mitt Romney<br />
<input type="checkbox" name="vehicle[]" value="Gingrich" /> Newt Gingrich<br />
<input type="checkbox" name="vehicle[]" value="Santorum" /> Rick Santorum<br />
<input type="checkbox" name="vehicle[]" value="Paul" /> Ron Paul<br />
<input type="submit" value="Submit" />
</form> -->
<br /><b>Type in and Submit the Candidate's Last Name </b>

<!--<form action="array2.php" method="get">
<input type="hidden" name="blob" value="Gingrich"/>
<input type="image" src="CandidatePics/gingrich400.jpg" alt="Submit"/>
</form>-->
<a href="array2.php?blob=Gingrich">
<img src="CandidatePics/gingrich400.jpg">
</a>
<br />
<br />
<?php
$group=array();
$candidate= $_POST["blob"];
//$candidate1= $candidate[0];
echo $candidate;
//echo $candidate1;
?>
</body>
</html>