<?php


//$candidate=$_GET['user'];
//$candidate="Romney";
$candidate= $_POST['vehicle'];

include("phpgraphlib.php");

$graph=new PHPGraphLib(950,650);

$link = mysql_connect('18.194.1.88:3306', 'TMG6470', 'snett')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('candidates_2012') or die('Could not select database');
$dataArray=array();
//print_r($candidate);
//echo "<br />" . $candidate[2] . "<br />";
//for($i=0;$i<count($candidate); $i++) { 
foreach ($candidate as $value) {
	
$sql="SELECT Date,SUM(Amount) FROM $value GROUP BY Date";

$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
$sum = 0;
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["SUM(Amount)"];
      $dates=$row["Date"];
	  $sum=$salesgroup+$sum;
      $data[$dates]=$sum;
  }
}
$dataArray[]=$data;
//$graph->addData($data);
}
//print_r($data);
$data1 = $dataArray[0];
$data2 = $dataArray[1];
$data3 = $dataArray[2];
$data4 = $dataArray[3];
//$data3 = array(43, 23, 34, 23, 53, 32, 43, 41);
//print_r($dataArray);
//print_r($data1);
//print_r($data2);
$graph->addData($data1,$data2,$data3,$data4);
$graph->setTitle("Campaign Finance Contributions Up To Sept. 30, 2011 in Dollars");
$graph->setTitleLocation('left');
$graph->setBars(false);
$graph->setLine(true);
$graph->setLineColor("green","red","blue","purple");
//$graph->setDataPoints(true);
//$graph->setGradient('red', 'maroon');
//$graph->setDataPointColor('maroon');
//$graph->setDataValues(true);
//$graph->setDataValueColor('maroon');
//$graph->setGoalLine(.0025);
//$graph->setGoalLineColor('red');
$graph->setLegendTitle($candidate[0], $candidate[1], $candidate[2], $candidate[3]);
$graph->setLegend(true);
$graph->createGraph();
//}*/
/*$graph->setTitle('CPU Cycles x1000');
$graph->setTitleLocation('left');
$graph->setLegend(true);
$graph->setLegendTitle('Module-1', 'Module-2', 'Module-3');
$graph->setGradient('green', 'olive');
$graph->createGraph();*/
//else  echo "Please try again and submit the last name of a major presidential candidate but not the current incumbent.";
/*$graph2->addData($data2);
$graph2->setTitle("Campaign Finance Contributions Up To Sept. 30, 2011 in Dollars");
$graph2->setTitleLocation('left');
$graph2->setBars(false);
$graph2->setLine(true);
$graph2->setLineColor("red");
$graph2->setLegendTitle($candidate[1]);
$graph2->setLegend(true);
$graph2->createGraph();*/
//echo "<meta http-equiv=\"Refresh\" content=0;url\"graphTest.html\">";
?>
