<?php

require_once 'Zend/Loader.php'; // the Zend dir must be in your include_path
Zend_Loader::loadClass('Zend_Gdata_YouTube');
function getAndPrintUserUploads($userName)                    
{     
  $yt = new Zend_Gdata_YouTube();
  $yt->setMajorProtocolVersion(2);
  printVideoFeed($yt->getuserUploads($userName));
} 
function printVideoFeed($videoFeed)
{
  $count = 1;
  foreach ($videoFeed as $videoEntry) {
  	if ($count <=3){
    	showVideo($videoEntry);
    	echo "<br />";
  	}
    $count++;
  }
}

function showVideo($videoEntry)
{
	echo "<br />";
	echo 'Video: ' . $videoEntry->getVideoTitle() . "<br />";
	echo "<br />";
	echo "<iframe width=\"320\" height=\"180\" src=\"http://youtube.com/embed/". $videoEntry->getVideoID() ."\" frameborder=\"0\" allowfullscreen></iframe><br />";
	echo "<br />";
	echo 'Duration: ' . $videoEntry->getVideoDuration() . "<br />";
  	echo 'View count: ' . $videoEntry->getVideoViewCount() . "<br />";
	echo "<br />";
	echo "<br />"."<div id=\"seperatinline\"></div>"."<br />";
  	//echo 'Rating: ' . $videoEntry->getVideoRatingInfo() . "<br />";
}
function printVideoEntry($videoEntry) 
{
  // the videoEntry object contains many helper functions
  // that access the underlying mediaGroup object
  echo "<br />";
  echo 'Video: ' . $videoEntry->getVideoTitle() . "<br />";
  //echo 'Video ID: ' . $videoEntry->getVideoId() . "<br />";
  echo "<iframe width=\"560\" height=\"315\" src=\"http://youtube.com/embed/". $videoEntry->getVideoID() ."\" frameborder=\"0\" allowfullscreen></iframe><br />";
  echo 'Updated: ' . $videoEntry->getUpdated() . "<br />";
  echo 'Description: ' . $videoEntry->getVideoDescription() . "<br />";
  echo 'Category: ' . $videoEntry->getVideoCategory() . "<br />";
  echo 'Tags: ' . implode(", ", $videoEntry->getVideoTags()) . "<br />";
  echo 'Watch page: ' . $videoEntry->getVideoWatchPageUrl() . "<br />";
  echo 'Flash Player Url: ' . $videoEntry->getFlashPlayerUrl() . "<br />";
  echo 'Duration: ' . $videoEntry->getVideoDuration() . "<br />";
  echo 'View count: ' . $videoEntry->getVideoViewCount() . "<br />";
  echo 'Rating: ' . $videoEntry->getVideoRatingInfo() . "<br />";
  echo 'Geo Location: ' . $videoEntry->getVideoGeoLocation() . "<br />";
  echo 'Recorded on: ' . $videoEntry->getVideoRecorded() . "<br />";
  
  // see the paragraph above this function for more information on the 
  // 'mediaGroup' object. in the following code, we use the mediaGroup
  // object directly to retrieve its 'Mobile RSTP link' child
  foreach ($videoEntry->mediaGroup->content as $content) {
    if ($content->type === "video/3gpp") {
      echo 'Mobile RTSP link: ' . $content->url . "<br />";
    }
  }
  
  echo "Thumbnails: <br />";
  $videoThumbnails = $videoEntry->getVideoThumbnails();

  foreach($videoThumbnails as $videoThumbnail) {
    echo $videoThumbnail['time'] . ' - ' . $videoThumbnail['url'];
    echo ' height=' . $videoThumbnail['height'];
    echo ' width=' . $videoThumbnail['width'] . "<br />";
  }
}
?>