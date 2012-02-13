

<?php
function getTwitterUpdates($twitter_id){
	$twitter_url = "http://twitter.com/statuses/user_timeline/$twitter_id.xml";
	$buffer = file_get_contents($twitter_url);
	$xml = new SimpleXMLElement($buffer);
	$link ="http://www.twitter.com/$twitter_id";
	echo "<a href=\"$link\">";
	echo "<img src=\"twitterlogo.png\" width=\"125\" border=none>";
	echo "</a>";
	echo "<br />";
	echo "<br />";
	echo "<br />";
	foreach($xml->status as $status_item){
		$status =  $status_item -> text;
		echo auto_link_twitter($status) . "<br />";
		echo "<br />"."<div id=\"seperationline\"></div>"."<br />";
	}
}
function auto_link_twitter($text)
{
   $pattern  = '#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#';
   $callback = create_function('$matches', '
       $url       = array_shift($matches);
       $url_parts = parse_url($url);

       $text = parse_url($url, PHP_URL_HOST) . parse_url($url, PHP_URL_PATH);
       $text = preg_replace("/^www./", "", $text);

       $last = -(strlen(strrchr($text, "/"))) + 1;
       if ($last < 0) {
           $text = substr($text, 0, $last) . "&hellip;";
       }

       return sprintf(\'<a rel="nofollow" href="%s">%s</a>\', $url, $text);
   ');

   return preg_replace_callback($pattern, $callback, $text);
}
?>