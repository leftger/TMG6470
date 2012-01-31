<?php
session_start();
//if(!isset($_SESSION['myusername'])){
//header("location:index.php");
//}
include('PoliticalDB.php');

// Connect to server and select databse.
mysql_connect(HOST,DB_USER,DB_PASS)or die("cannot connect"); 
mysql_select_db(DB_NAME)or die("cannot select DB");
$table_name='people';
$this_id = $_GET['id'];
$result = mysql_query("SELECT * FROM $table_name WHERE id = '$this_id'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
}
$ans=mysql_fetch_assoc($result);
include("youtube.php");
include("facebook.php");
include("twitter.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		include('navbar.php');
		$first_name = $ans['firstname'];
		$last_name = $ans['lastname'];
		?>
		<title><?php echo "$first_name $last_name's Candidate Page";?></title>
		<link rel = "stylesheet" type="text/css" href="candidate.css">
	<style type="text/css">
	body{font-family: Arial, Helvetica, sans-serif; font-size: 13px;}
	/*background: #faf8cc;*/
	background: white;}
	#bigbox{ padding-top: 100px; position: relative; top: 200px; right: 2.5%; padding: 3px;background: #eeeeed; width: 95%; height: 350%; box-shadow: 3px 3px 5px black; }
	
	#twitterbox{font-family: Helvetica,Arial,Helvetica,sans-serif; padding: 10%; background-image: url('twitterbackground.png'); width: 350px position: relative; top: -0%; box-shadow: 3px 3px 5px black;}
	#youtubebox{font-family: arial,sans-serif; padding: 10%; background-color: #B8B8B8; width:350px;position: relative; top: -50%; box-shadow: 3px 3px 5px black;}
	#facebookbox{font-family: lucida,tahoma,verdana,arial,sans-serif; padding: 10%; background:#133782; width: 350px; box-shadow: 3px 3px 5px black;}
	
	
	
	td{padding: 5px; width:400px;}
	</style>
	</head>
	
	<body>
		<div id="bigbox">
		<table border=none position="absolute" top="20%" >
		<tr>
		<td valign="top" >
		<div id="twitterbox">
		<div id="twitterlogowrap">
		<!--<img src="twitterlogo.png" width="125px" height="100px">-->
		</div>
		<?php
		if($ans['twitterid']!=null){
			getTwitterUpdates($ans['twitterid']);
		}
		?></div>
		<br />
		<br />
		<div id="info">
			<h1> Other Media Sites/Info:</h1>
			<table border="1">>
				<?php
				foreach($ans as $a=>$b)
				{
					if($b!=NULL){
						echo "<tr> <td>" . $a. "</td><td>" . $b. "</td></tr>";
					}
				}
				?>
			</table>
		</div>
		</td>
		<td valign="top" >
		<div id="youtubebox">
		<div id="youtubelogowrap">
		<!--<img src="youtubelogo.png" width="125px" height="100px">-->
		</div>
		<?
		if ($ans['youtubeid']!=null){
			echo "<a href=\"http://youtube.com/". $ans['youtubeid']."\">";
			echo "<img src=\"youtubelogo.png\" width=\"125\" border=none >";
			echo "</a>";
		
			getAndPrintUserUploads($ans['youtubeid']);
		}?>
		</div>
		</td>
		<td valign="top" >
		<div id="facebookbox">
		<div id="facebooklogowrap">
		<!--<img src="facebooklogo.png" width="125px" height="100px" border=none>-->
		</div>
		<?if ($ans['fbid']!=null){
			getFacebookStuff($ans['fbid']);
		}
		?>
		</div>
		</td>
		</tr>
		</table>
		
		</div>
	</body>
	
</html>
