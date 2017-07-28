<?php
$settei = 'mysql:dbname=data_analysis;host=localhost;charset=utf8';
$user = 'username';
$password = 'open';
$setuzoku = new PDO($settei, $user, $password);
print('接続に成功しました。');
?>