<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(650,400);
$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett')
   or die('Could not connect: ' . mysql_error());    
mysql_select_db('candidates_2012') or die('Could not select database');
$DatesnAprove="SELECT Date,Aprove FROM Obamas_Approval_Rating";
$dataArray=array();
$result = mysql_query($DatesnAprove) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $Aprove=$row["Aprove"];
      $date=$row["Date"];
      $dataArray[$date]=$Aprove;
  }
}
$graph->addData($dataArray);
$graph->setTitle("Obama's Approval Rating");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('#00FF00');
$graph->setDataValues(false);
$graph->setDataValueColor('#00FF00');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('#00FF00');
$graph->createGraph();
?>

