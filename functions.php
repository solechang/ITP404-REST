<?php

function getTumblrFromJSON() {
	$url = "http://api.tumblr.com/v2/blog/fuckyeahblackhippy.tumblr.com/posts/photo?api_key=qrE3UsTsrhqKBnC7EI9WOPU5PQNkTmVQ4OxuBDbgI4PIcAw4ze";
	$jsonString = file_get_contents($url);
	$arrayOfTweets = json_decode($jsonString);
	return $arrayOfTweets;
}	



?>