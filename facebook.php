<html>
	<head>
<style type="text/css">
#seperatnline{width: 350px; height: 2px; background: white;}
</style>
</head>
</html>


<?php
require_once("fbsdk/facebook.php");
function getUserName($candidate_fbid,$facebook){
	$user = $facebook->api("/$candidate_fbid",'GET');
	$name = $user['name'];	
	$site = $user['link'];
	//echo  "<div id=\"candidate_site\">" . auto_link($site) . "</div><br />";
	echo "<a href=\"$site\">";
	echo "<img src=\"facebooklogo.png\" width=\"125\" border=none >";
	echo "</a>";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	echo  "<font-size=\"25px\"><div id=\"candidate_name\">" . $name . "</div><br />";
	}
function getFacebookStuff($candidate_fbid){
	$config = array();
  	$config['appId'] = '282701958461137';
  	$config['secret'] = 'd37af5e3f817437adfe418c579581920';
  	$config['fileUpload'] = false; // optional

  	$facebook = new Facebook($config);
  	//$access_token = $facebook->getAccessToken();
  	getUserName($candidate_fbid,$facebook);
	echo "<br />";
  	getUserImage($candidate_fbid);
	echo "<br />";
	echo "<br />";
	echo "<br />";

  	getUserFeed($candidate_fbid,$facebook);
}

function getUserImage($candidate_fbid){
	echo "<img src =\"http://graph.facebook.com/$candidate_fbid/picture?type=large\"/>";
}
function getUserFeed($candidate_fbid,$facebook){
	$user_feed = $facebook->api("/$candidate_fbid/feed",'GET');
	date_default_timezone_set('America/New_York');
	printFeeds($user_feed,$candidate_fbid,$facebook);
}
function printFeeds($user_feed,$candidate_fbid,$facebook){
	$count=0;
	foreach($user_feed['data'] as $feed){
		//echo $feed['from']['id'] . "<br />";
		if ($count < 4 && $feed['from']['id']==$candidate_fbid){
			echo "Posted by " . $feed['from']['name']. "on " . date('D, F jS Y g:ia', strtotime($feed['created_time'])) . "<br />";
			if($feed['type']=='status' || $feed['type']=='link'){
				echo auto_link($feed['message']) . "<br />";	
				echo "<br />";			
			}
			elseif($feed['type']=='video'){
				echo"<iframe width=\"320\" src=\"" . str_replace('autoplay=1','autoplay=0',$feed['source']) ."\" frameborder=\"0\" allowfullscreen=\"true\"></iframe><br />";
			}
			elseif($feed['type']=='photo'){
				$image_id = $feed['object_id'];
				$image = $facebook->api("/$image_id",'GET');
				echo"<img src=\"". $image['source'] ."\" width=\"320\" /><br />";
			}
			if (isset($feed['likes']['count']))
			{
				echo "<br />";
				echo "<img src= \"likef.png\" width=\"20px\" border= none>".$feed['likes']['count'] . " people like this post.";
				echo "<br />";
				echo "<br />"."<div id=\"seperatnline\"></div>"."<br />";
			}
			echo "<br /><br />";
			$count++;
		}
  	}
	foreach($user_feed['data'] as $feed){
		//echo $feed['from']['id'] . "<br />";
		if ($count < 4 ){
			echo "Posted by " . $feed['from']['name']. "on " . date('D, F jS Y g:ia', strtotime($feed['created_time'])) . "<br />";
			if($feed['type']=='status' || $feed['type']=='link'){
				echo auto_link($feed['message']) . "<br />";
			}
			elseif($feed['type']=='video'){
				echo"<iframe width=\"320\" src=\"" . str_replace('autoplay=1','autoplay=0',$feed['source']) ."\" frameborder=\"0\" allowfullscreen=\"true\"></iframe><br />";
			}
			elseif($feed['type']=='photo'){
				$image_id = $feed['object_id'];
				$image = $facebook->api("/$image_id",'GET');
				echo"<img src=\"". $image['source'] ."\" width=\"320\" /><br />";
			}
			if (isset($feed['likes']['count']))
			{
				echo $feed['likes']['count'] . " people like this post.";
			}
			echo "<br /><br />";
			$count++;
		}
  	}
}
function auto_link($text) {
  $pattern = "/(((http[s]?:\/\/)|(www\.))(([a-z][-a-z0-9]+\.)?[a-z][-a-z0-9]+\.[a-z]+(\.[a-z]{2,2})?)\/?[a-z0-9._\/~#&=;%+?-]+[a-z0-9\/#=?]{1,1})/is";
  $text = preg_replace($pattern, " <a href='$1'>$1</a>", $text);
  // fix URLs without protocols
  $text = preg_replace("/href='www/", "href='http://www", $text);
  return $text;
}
?>