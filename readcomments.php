<?php
ob_start();
$host="18.194.1.88:3306"; 
$username="TMG6470";
$password="snett"; 
$db_name="candidates_2012";  
$tbl_name="Comments"; // Table name

$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett') or die('Could not connect: ' . mysql_error());    
mysql_select_db('candidates_2012') or die('Could not select database');
$listofcomments="SELECT Name,Vote,Coment,ID FROM Comments";
$result = mysql_query($listofcomments) or die('Query failed: ' . mysql_error());
$dataArray=array();
if ($result) {
  $i=0;
  while ($row = mysql_fetch_assoc($result)) {
      $Coment=$row["Coment"];
      $Name=$row["Name"];
	  $Vote=$row["Vote"];
	  $ID=$row["ID"];
      $dataArray[$i]=array($Name,$Coment,$Vote,$ID);
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
		if($sort[$n]==$dataArray[$m][2]){
		$fullsort[$n]=array($dataArray[$m][0],$dataArray[$m][1],$dataArray[$m][2],$dataArray[$m][3]);
		}
	}
}
?><table border=none>
<tr>
<td><? echo $fullsort[0][0]."-"; ?></td>
<td><? echo "like'd"."&nbsp;".$fullsort[0][2]."&nbsp;"."times"; ?></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[0][1] . "'"; ?><br /></td>
	<td><INPUT TYPE="BUTTON" VALUE="like!" ONCLICK= <? "UPDATE $tbl_name SET Vote = ($fullsort[0][2]+1) WHERE ID = $fullsort[0][3]"; 
	echo "<meta http-equiv=\"Refresh\" content=0;url=\"Obamasapproval.php\">"; ?> ></td>
</tr>
<tr>
<td><br /><? echo $fullsort[1][0]."-"; ?></td> 
<td><? echo "like'd"."&nbsp;".$fullsort[1][2]."&nbsp;"."times"; ?></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[1][1] . "'"; ?><br /></td>
	<td> <INPUT TYPE="BUTTON" VALUE="like!" ONCLICK=<? "UPDATE $tbl_name SET Vote = ($fullsort[1][2]+1) WHERE ID = $fullsort[1][3]"; 
	echo "<meta http-equiv=\"Refresh\" content=0;url=\"Obamasapproval.php\">"; ?>></td>
</tr>
<tr>
<td><br /><? echo $fullsort[2][0]."-"; ?></td>
<td><? echo "like'd"."&nbsp;".$fullsort[2][2]."&nbsp;"."times"; ?></td>
</tr>
<tr>
	<td><br /><? echo "'".$fullsort[2][1] . "'"; ?><br /></td>
	<td><INPUT TYPE="BUTTON" VALUE="like!" ONCLICK= <? "UPDATE $tbl_name SET Vote = ($fullsort[2][2]+1) WHERE ID = $fullsort[2][3]"; 
	echo "<meta http-equiv=\"Refresh\" content=0;url=\"Obamasapproval.php\">"; ?> ></td>
</tr>
</table>
<?
ob_end_flush();
?>