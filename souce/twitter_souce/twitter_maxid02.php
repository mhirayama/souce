<?php
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "取得したConsumer Keyを記述します";
$consumerSecret = "取得したConsumer Secretを記述します";
$accessToken = "取得したAccess Tokenを記述します";
$accessTokenSecret = "取得したAccess Token Secretを記述します";

$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
date_default_timezone_set('Asia/Tokyo');
$tweets_params = ['q'=>'君の名は','count'=>'10000','max_id'=>$_POST['maxid']];
$request_number = 10;

$tweets = $connection->get('search/tweets', $tweets_params)->statuses;
$search = $connection->get('search/tweets', $tweets_params)->search_metadata->next_results;

foreach ($tweets as $value) {
    $text01 = $value->text; 
    print $text01;
    print "<br>";
}
print "<br>";
$max_id = substr($search, 8, 18);
$tweets_params01 = ['q'=>'君の名は','count'=>'10000','max_id'=>$max_id];
print $tweets_params01['max_id'];
?>

<FORM name="form1" method="post" action="twitter_maxid02.php">
<INPUT type="text" name="maxid">
<INPUT type="submit" value="送　信">
</FORM>