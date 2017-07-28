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
$tweets_params = ['user_id' => $line];
$name = $connection->get('users/show', $tweets_params)->name;
$screen_name = $connection->get('users/show', $tweets_params)->screen_name;
print "NHKニュース".","."nhk_news".",".$name.",".$screen_name.","."net";
print "<br>";
  }
}