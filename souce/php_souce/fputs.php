<?php
$fread = fopen("list1.csv", "r");
$fwrite = "list2.csv";
$fp = fopen( $fwrite, 'w' );

if($fread){
while ($line = fgets($fread)) {
if(mb_strlen("$line","UTF-8") <= 1){ //文字数が一文字以下を除外
}elseif(preg_match('/^[一-龠]$/u',$line)){
//漢字一文字を除外
}elseif(preg_match('/^[ぁ-ん]$/u',$line)){
//全角ひらがな一文字を除外
}elseif(preg_match('/^[0-9]$/',$line)){
//数字一文字を除外
}elseif(preg_match('/^[a-z]$/',$line)){
//半角英字小文字一文字を除外
}elseif(preg_match('/^[A-Z]$/',$line)){
//半角英字大文字一文字を除外
}else{
var_dump( fputs($fp, $line) ); }
}
}
?>