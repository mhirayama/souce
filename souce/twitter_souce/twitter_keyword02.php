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

$tweets_params = ['q'=>'君の名は','count'=>'500','max_id'=>''];
$request_number = 5;

for ($i = 0; $i < $request_number; $i++) { 
$tweets = $connection->get('search/tweets', $tweets_params)->statuses;
$search = $connection->get('search/tweets', $tweets_params)->search_metadata->next_results;
foreach ($tweets as $value) {
    $text01 = $value->text; 
    $updated = date('Y/m/d H:i:s', strtotime($value->created_at));
    print $updated.",";
    print $text01;
    print "<br>";
}
$max_id = substr($search, 8, 18);
$replacements2 = ['max_id' => $max_id];
$tweets_params = array_replace($tweets_params,$replacements2);
}