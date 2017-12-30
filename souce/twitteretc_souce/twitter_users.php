<?php
require "/applications/xampp/htdocs/twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

$consumerKey = "取得したConsumer Keyを記述します";
$consumerSecret = "取得したConsumer Secretを記述します";
$accessToken = "取得したAccess Tokenを記述します";
$accessTokenSecret = "取得したAccess Token Secretを記述します";
$connection = new TwitterOAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

date_default_timezone_set('Asia/Tokyo');

$users_params = ['screen_name' => 'nhk_news'];
$name = $connection->get('users/show', $users_params)->name;
$screen_name = $connection->get('users/show', $users_params)->screen_name;
$id = $connection->get('users/show', $users_params)->id;
$location = $connection->get('users/show', $users_params)->location;
$followers = $connection->get('users/show', $users_params)->followers_count;
$friends = $connection->get('users/show', $users_params)->friends_count;

print $name.",".$screen_name.",".$id.",".$location.",".$followers.",".$friends;
print "<br>";

?>