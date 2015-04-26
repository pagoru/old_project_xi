<?php
include 'cone.php';
function getID($uuid){
	
	return substr($uuid, 0, 1)."-".substr($uuid, 1, 3)."-".substr($uuid, 4, 3)."-".substr($uuid, 7, 3);
}

function getUrlGL($gl){
	
	return "http://goo.".$gl;
	
}

function getTitle($url){
	
	$t = explode("/", getRealUrl($url));
	return $t[2];
	
}

function getRealUrl($url){
	
	$content = get_data("https://www.googleapis.com/urlshortener/v1/url?key=".GOO_KEY."&shortUrl=".$url);
	$json = json_decode($content, true);
	return $json['longUrl'];
	
}

function getFavicon($url){
	
	return "http://www.google.com/s2/favicons?domain=".getRealUrl($url);

}

function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}
?>