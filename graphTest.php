<?php

$good=array("Romney","Gingrich","Paul","Santorum");
//$candidate=$_GET['user'];
//$candidate="Romney";
$candidate= $_POST['vehicle'];

if ($candidate==NULL){
$candidate= array("Romney","Gingrich","Paul","Santorum");}

include("phpgraphlib.php");

$graph=new PHPGraphLib(950,650);

$link = mysql_connect('sql.mit.edu', 'grosas', 'snett')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('grosas+candidates_2012') or die('Could not select database');
$dataArray=array();
//print_r($candidate);
//echo "<br />" . $candidate[2] . "<br />";
//for($i=0;$i<count($candidate); $i++) { 
foreach ($candidate as $value) {
$sql="SELECT $value,Date FROM gallup_poptime";

$result = mysql_query($sql) or die('Query failed: ' . mysql_error());

if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["$value"];
      $dates=$row["Date"];
      
      $data[$dates]=$salesgroup;
  }
}
$dataArray[]=$data;
//$graph->addData($data);
}

if(count($dataArray)==4){
$graph->addData($dataArray[0], $dataArray[1], $dataArray[2], $dataArray[3]);}
if(count($dataArray)==1){
$graph->addData($dataArray);}
if(count($dataArray)==2){
$graph->addData($dataArray[0], $dataArray[1]);}
if(count($dataArray)==3){
$graph->addData($dataArray[0], $dataArray[1], $dataArray[2]);}


//$data3 = array(43, 23, 34, 23, 53, 32, 43, 41);
//print_r($dataArray);
//print_r($data1);
//print_r($data2);
//$graph->addData($data1,$data2,$data3,$data4);
$graph->setTitle("Ballot Support Percentage          Nov. 6, 2011 - Jan. 21, 2012");
$graph->setTitleLocation('left');
$graph->setBars(false);
$graph->setLine(true);
$graph->setLineColor("green","red","blue","purple");
$graph->setRange(40,0);
$graph->setXValues(false);
//$graph->setDataPoints(true);
//$graph->setGradient('red', 'maroon');
//$graph->setDataPointColor('maroon');
//$graph->setDataValues(true);
//$graph->setDataValueColor('maroon');
//$graph->setGoalLine(.0025);
//$graph->setGoalLineColor('red');
if(count($candidate)==4){
$graph->setLegendTitle($candidate[0], $candidate[1], $candidate[2], $candidate[3]);}
if(count($candidate)==1){
$graph->setLegendTitle($candidate[0]);}
if(count($candidate)==2){
$graph->setLegendTitle($candidate[0], $candidate[1]);}
if(count($candidate)==3){
$graph->setLegendTitle($candidate[0], $candidate[1], $candidate[2]);}

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
?>
