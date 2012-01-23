<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350);
$link = mysql_connect('localhost', 'TMG6470', 'snett')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('gallup_poptime') or die('Could not select database');
  
$dataArray=array();
  
//get data from database
$sql="SELECT Gingrich COUNT(*), AS 'count' FROM Date GROUP BY Gingrich";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["Gingrich"];
      $count=$row["Date"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Popularity");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('black');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>