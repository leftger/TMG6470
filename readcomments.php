<?php
ob_start();
$host="18.194.1.88:3306"; 
$username="TMG6470";
$password="snett"; 
$db_name="candidates_2012";  
$tbl_name="Comments"; // Table name
$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett') or die('Could not connect: ' . mysql_error());    
mysql_select_db('candidates_2012') or die('Could not select database');


$listofcomments="SELECT Name,Vote,Coment,ID,BadVote FROM Comments";
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
?>
<table border=none>
<tr>
<td><? echo $fullsort[0][0]."-"; ?></td>
<td><? echo $fullsort[0][2]?><img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[0][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[0][1] . "'"; ?><br /></td>
	<td>
<?	$id=$fullsort[0][3];
	$vte=$fullsort[0][2]+1;
	$bvte=$fullsort[0][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id&vote=$vte\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id&bvote=$bvte\">";?></td>
</tr>
<tr>
<td><br /><? echo $fullsort[1][0]."-"; ?></td> 
<td><? echo $fullsort[1][2]?> <img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[1][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[1][1] . "'"; ?><br /></td>
<td>
<?	$id2=$fullsort[1][3];
	$vte2=$fullsort[1][2]+1;
	$bvte2=$fullsort[1][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id2&vote=$vte2\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id2&bvote=$bvte2\">";?></td>
</tr>
<tr>
<td><br /><? echo $fullsort[2][0]."-"; ?></td>
<td><? echo$fullsort[2][2]?><img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[2][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[2][1] . "'"; ?><br /></td>
<td>
<?	$id3=$fullsort[2][3];
	$vte3=$fullsort[2][2]+1;
	$bvte3=$fullsort[2][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id3&vote=$vte3\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id3&bvote=$bvte3\">";?></td>
</tr>
	<tr>
<td><br /><?if($morerows){ echo $fullsort[3][0]."-"; }?></td>
<td><? if($morerows){ echo$fullsort[3][2];?><img src='thumb.png' alt="like" width="30px" height="20px" ></td><?}?>
<td><? echo $fullsort[3][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? if($morerows){ echo "'".$fullsort[3][1] . "'"; }?><br /></td>
<td>
<?	$id4=$fullsort[3][3];
	$vte4=$fullsort[3][2]+1;
	$bvte4=$fullsort[3][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id4&vote=$vte4\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id4&bvote=$bvte4\">";?></td>
</tr>
<td><br /><? echo $fullsort[4][0]."-"; ?></td>
<td><? echo$fullsort[4][2]?><img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[4][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[4][1] . "'"; ?><br /></td>
<td>
<?	$id5=$fullsort[4][3];
	$vte5=$fullsort[4][2]+1;
	$bvte5=$fullsort[4][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id5&vote=$vte5\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id5&bvote=$bvte5\">";?></td>  </td>
</tr>
<td><br /><? echo $fullsort[5][0]."-"; ?></td>
<td><? echo$fullsort[5][2]?><img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[5][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[5][1] . "'"; ?><br /></td>
<td>
<?	$id6=$fullsort[6][3];
	$vte6=$fullsort[6][2]+1;
	$bvte6=$fullsort[6][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id6&vote=$vte6\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id6&bvote=$bvte6\">";?></td> </td>
</tr>
<td><br /><? echo $fullsort[6][0]."-"; ?></td>
<td><? echo$fullsort[6][2]?><img src='thumb.png' alt="like" width="30px" height="20px" ></td>
<td><? echo $fullsort[6][4]?><img src='badthumb.png' alt="like" width="30px" height="20px" ></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[6][1] . "'"; ?><br /></td>
<td>
<?	$id7=$fullsort[7][3];
	$vte7=$fullsort[7][2]+1;
	$bvte7=$fullsort[7][4]+1;
	echo "<INPUT TYPE=\"BUTTON\" VALUE=\"like!\" ONCLICK= window.location.href=\"like.php?id=$id7&vote=$vte7\">";?>
	</td>
	<td><?echo "<INPUT TYPE=\"BUTTON\" VALUE=\"dislike :( \" ONCLICK= window.location.href=\"blike.php?id=$id7&bvote=$bvte7\">";?></td>
</tr>
</table>
<?
ob_end_flush();
?>