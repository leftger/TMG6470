<?php


include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350);
$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('candidates_2012') or die('Could not select database');
  
$dataArray=array();
//get data from database
$sql="SELECT Gingrich,Date FROM gallup_poptime";
//$dates="SELECT Date FROM gallup_poptime";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
//$result2 = mysql_query($dates) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["Gingrich"];
      $dates=$row["Date"];
      //$date=$result2[$count];
      //add to data array
      $dataArray[$dates]=$salesgroup;
  }
}

//print_r($dataArray);
$graph->addData($dataArray);
$graph->setTitle("Popularity");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
echo "gay";
?>