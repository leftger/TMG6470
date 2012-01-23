<?php
echo "pooop";
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,200);
$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett')
   or die('Could not connect: ' . mysql_error());    
mysql_select_db('candidates_2012') or die('Could not select database');
$DatesnAproval="SELECT Date,%Aproval FROM Obamas_Approval_Rating";
$dataArray=array();
$result = mysql_query($DatesnAproval) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $Aproval=$row["%Aproval"];
      $dates=$row["Date"];
      $dataArray[$dates]=$Aproval;
  }
}
$graph->addData($dataArray);
$graph->setTitle("Obama's Approval Rating");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>
