<?php
// OAuthライブラリの読み込み
require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//認証情報４つ
$consumerKey = "取得したConsumer Keyを記述します";
$consumerSecret = "取得したConsumer Secretを記述します";
$accessToken = "取得したAccess Tokenを記述します";
$accessTokenSecret = "取得したAccess Token Secretを記述します";

//接続
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
date_default_timezone_set('Asia/Tokyo');

$tweets_params = ['count' => '100','screen_name'=>'nhk_news'];
$tweets = $connection->get('friends/ids', $tweets_params)->ids;

foreach($tweets as $userid){
print $userid;
print "<br>";
}