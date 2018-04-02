<?php
require_once 'src/twitter.class.php';
$consumerKey = $_ENV["CONSUMERTOKEN"];
$consumerSecret = $_ENV["CONSUMERSECRET"];
$accessToken = $_ENV["ACCESSTOKEN"];
$accessTokenSecret = $_ENV["ACCESSSECRET"];
$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
try {
	$date = date('l jS \of F Y h:i:s A');
	$tweet = $twitter->send('The date is ' . $date . ' #openshifttweeter');
} catch (TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
	echo 'End';
}
echo "<h1>" . $date . "</h1>"; 