<?php
require "/applications/xampp/htdocs/twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "取得したConsumer Keyを記述します";
$consumerSecret = "取得したConsumer Secretを記述します";
$accessToken = "取得したAccess Tokenを記述します";
$accessTokenSecret = "取得したAccess Token Secretを記述します";
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

date_default_timezone_set('Asia/Tokyo');

$tweets_params = ['q'=>'攻殻機動隊','count'=>'10'];
$tweets = $connection->get('search/tweets', $tweets_params)->statuses;

foreach ($tweets as $value) {
    $text01 = $value->text; 
    $text03 = $value->user->screen_name; 
    $updated = date('Y/m/d H:i', strtotime($value->created_at));
    $icon_url = $value->user->profile_image_url;
    print  "<img src = $icon_url>";
    print $updated.",";
    print $text03.",";
    print $text01;
    print "<br>";
}
?>