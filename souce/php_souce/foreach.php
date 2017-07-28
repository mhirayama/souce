<?php
$data = array(
array('佐藤', '東京都', '29歳'),
array('田中', '千葉県', '31歳'),
array('鈴木', '北海道', '54歳')
);

foreach($data as $result){
print $result[0].",";
print $result[1].",";
print $result[2];
print "<br>";
}
?>