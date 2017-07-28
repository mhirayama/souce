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

$file = fopen("./data/nhk.txt", "r");
if($file){
while ($line = fgets($file)) {
$tweets_params01 = ['count'=>'10','user_id'=>$line];
$tweets = $connection->get('friends/ids', $tweets_params01)->ids;
$screen_name01 = $connection->get('users/show', $tweets_params01)->screen_name;
$name01 = $connection->get('users/show', $tweets_params01)->name;
foreach($tweets as $userid){
$tweets_params02 = ['user_id'=>$userid];
$screen_name02 = $connection->get('users/show', $tweets_params02)->screen_name;
$name02 = $connection->get('users/show', $tweets_params02)->name;
print $name01.",".$screen_name01.",".$name02.",".$screen_name02.","."net";
print "<br>";
}
}
}