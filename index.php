<?php
require_once 'src/twitter.class.php';

$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
try {
	$date = date('l jS \of F Y h:i:s A');
	$tweet = $twitter->send('The date is $date #openshifttweeter');
} catch (TwitterException $e) {
	echo 'Error: ' . $e->getMessage();
}
<h1><? echo $date ?> </h1>