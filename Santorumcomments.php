<?php

ob_start();
$host="sql.mit.edu"; 
$username="grosas"; 
$password="snett"; 
$db_name="grosas+candidates_2012";  
$tbl_name="SantorumComments"; // Table name
$web="Santorumbio.php";
$link = mysql_connect($host, $username, $password) or die('Could not connect: ' . mysql_error());    
mysql_select_db($db_name) or die('Could not select database');


$listofcomments="SELECT Name,Vote,Coment,ID,BadVote FROM $tbl_name";
$result = mysql_query($listofcomments) or die('Query failed: ' . mysql_error());
$dataArray=array();
if ($result) {
  $i=0;
  while ($row = mysql_fetch_assoc($result)) {
      $Coment=$row["Coment"];
      $Name=$row["Name"];
	  $Vote=$row["Vote"];
	  $BadVote=$row["BadVote"];
	  $ID=$row["ID"];
      $dataArray[$i]=array($Name,$Coment,$Vote,$ID,$BadVote);
      $i++;
  }
}
$VoteArray=array();
for($j=0; $j<$i; $j++){
	$VoteArray[$j]=$dataArray[$j][2];
}
$sort=array();
for($k=0; $k<$i; $k++){
	$sort[$k]=max($VoteArray);
	for($l=0; $l< $i; $l++) {
		if($VoteArray[$l] == max($VoteArray)){
			$VoteArray[$l]=0;
			break;
		}
	}
}

$fullsort=array();
for($n=0; $n<$i; $n++){
	for($m=0; $m<$i; $m++){
		if(($sort[$n]==$dataArray[$m][2]) && !($dataArray[$m]==NULL)){
		$fullsort[$n]=array($dataArray[$m][0],$dataArray[$m][1],$dataArray[$m][2],$dataArray[$m][3],$dataArray[$m][4]);
		$dataArray[$m]=NULL;
		break;
		}
	}
}
$morerows=true;
$chop=array();
for($x=0; $x<$i; $x++){
	if(!($x==0)){
		$chop[$x]=array($fullsort[$x][0],$fullsort[$x][1],$fullsort[$x][2],$fullsort[$x][3],$fullsort[$x][4]);
	}
}

$rand_keys =array_rand($chop, 2);

 
$newone=array();

for($x=1; $x<count($chop)+1; $x++){
	$temppp=0;
	if($chop[$x][3]>$temppp){
	$temppp=$chop[$x];
	}
	$newone=array($temppp[0],$temppp[1],$temppp[2],$temppp[3],$temppp[4]);
}
?>
?>

<html>
	<head>
	<link rel = "stylesheet" type="text/css" href=" main.css" >
	</head>
<table border=none>
<tr >
	<?	$id=$fullsort[1][3];
	$vte=$fullsort[1][2]+1;
	$bvte=$fullsort[1][4]+1;?>

<td> <font color="#1C62B9"><?echo $fullsort[0][0]?><? echo "-"; ?></td>
<td ><font color="#090"><?echo $fullsort[0][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichlike.php?id=$id&vote=$vte\">";?> </td></div></div>
<td ><font color=red><?echo $fullsort[0][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichblike.php?id=$id&vote=$bvte\">";?> </td></div></div>
</tr>
<tr>
<td colspan="5"><? echo "'".$fullsort[0][1] . "'"; ?></td>
</tr>
<tr>
	<?	$id2=$newone[3];
	$vte2=$newone[2]+1;
	$bvte2=$newone[4]+1;?>
<td><br /><font color="#1C62B9"><?echo $newone[0]."-"; ?></td>
<td><font color="#090"><?echo $newone[2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichlike.php?id=$id2&vote=$vte2\">";?> </td></div></div>

<td><font color=red><?echo $newone[4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichblike.php?id=$id2&vote=$bvte2\">";?> </td></div></div>
</tr>
<tr >
<td  colspan="5"><? echo "'".$newone[1] . "'"; ?></td>
</tr>
<tr>
	<?	$id3=$chop[$rand_keys[0]][3];
	$vte3=$chop[$rand_keys[0]][2]+1;
	$bvte3=$chop[$rand_keys[0]][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $chop[$rand_keys[0]][0]."-"; ?></td>
<td><font color="#090"><?echo $chop[$rand_keys[0]][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichlike.php?id=$id3&vote=$vte3\">";?> </td></div></div>

<td><font color=red><?echo $chop[$rand_keys[0]][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"Gingrichblike.php?id=$id3&vote=$bvte3\">";?> </td></div></div>

</tr>
<tr><td colspan="5"><? echo "'".$chop[$rand_keys[0]][1] . "'"; ?></td>
</tr>
<!--
<tr>
	<?	$id4=$fullsort[3][3];
	$vte4=$fullsort[3][2]+1;
	$bvte4=$fullsort[3][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $fullsort[3][0]."-"; ?></td>
<td><font color="#090"><?echo $fullsort[3][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"like.php?id=$id4&vote=$vte4\">";?> </td></div></div>

<td><font color=red><?echo $fullsort[3][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"blike.php?id=$id4&vote=$bvte4\">";?> </td></div></div>

</tr>
<tr>
	<td><?  echo "'".$fullsort[3][1] . "'"; ?></td>
</tr>
<tr>
	<?	$id5=$fullsort[4][3];
	$vte5=$fullsort[4][2]+1;
	$bvte5=$fullsort[4][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $fullsort[4][0]."-"; ?></td>
<td><font color="#090"><?echo $fullsort[4][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"like.php?id=$id5&vote=$vte5\">";?> </td></div></div>

<td><font color=red><?echo $fullsort[4][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"blike.php?id=$id5&vote=$bvte5\">";?> </td></div></div>

</tr>
<tr>
<td><? echo "'".$fullsort[4][1] . "'"; ?></td>
</tr>
<tr>
	<?	$id6=$fullsort[5][3];
	$vte6=$fullsort[5][2]+1;
	$bvte6=$fullsort[5][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $fullsort[5][0]."-"; ?></td>
<td><font color="#090"><?echo $fullsort[5][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"like.php?id=$id6&vote=$vte6\">";?> </td></div></div>

<td><font color=red><?echo $fullsort[5][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"blike.php?id=$id6&vote=$bvte6\">";?> </td></div></div>

</tr>
<tr>
<td><? echo "'".$fullsort[5][1] . "'"; ?></td>
</tr>
<tr>
	<?	$id7=$fullsort[6][3];
	$vte7=$fullsort[6][2]+1;
	$bvte7=$fullsort[6][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $fullsort[6][0]."-"; ?></td>
<td><font color="#090"><?echo $fullsort[6][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"like.php?id=$id7&vote=$vte7\">";?> </td></div></div>
<td><font color=red><?echo $fullsort[6][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"blike.php?id=$id7&vote=$bvte7\">";?> </td></div></div>

</tr>
<tr>
<td><? echo "'".$fullsort[6][1] . "'"; ?><br /> </td>
</tr>
<tr>
	<?	$id8=$fullsort[7][3];
	$vte8=$fullsort[7][2]+1;
	$bvte8=$fullsort[7][4]+1;?>
<td><br /><font color="#1C62B9"><?echo $fullsort[7][0]."-"; ?></td>
<td><font color="#090"><?echo $fullsort[7][2]?></td>
<td ><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "likeicon.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"thumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"like.php?id=$id8&vote=$vte8\">";?> </td></div></div>
<td><font color=red><?echo $fullsort[7][4]?></td>
<td><div id="thumb"><div id="thumbwrap"><div id="yesbox"><img src= "dislike.png" alt="like" width="40px" height="40px"></div><?echo "<INPUT TYPE=\"IMAGE\" SRC=\"badthumb.png\"  width=\"30px\" height=\"25px\" ONCLICK= window.location.href=\"blike.php?id=$id7&vote=$bvte7\">";?> </td></div></div>

</tr>
<tr>
<td><? echo "'".$fullsort[7][1] . "'"; ?><br /> </td>
</tr>-->
</table>
</html>

<?php 

ob_end_flush();
?>
