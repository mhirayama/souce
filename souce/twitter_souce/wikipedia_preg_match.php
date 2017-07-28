<?php

$fread = fopen("data/jawiki-latest-all-titles-in-ns0.txt", "r");
$fwrite = "data/wiki.txt";
$fp = fopen( $fwrite, 'w' );
if($fread){
while ($line = fgets($fread)) {
if((mb_strlen($line) <= 1)){ 
}elseif(strstr($line,'_')){
}elseif(preg_match('/^[1-9][0-9]*$/',$line)){
}elseif(preg_match('/^[0-9]+[年]+[代]*$/',$line)){
}elseif(preg_match('/^[0-9]+[年]+[^代]*$/',$line)){
}elseif(preg_match('/^[0-9]+[月][0-9]+[日]$/',$line)){
}elseif(preg_match('/^[ぁ-ん]$/u',$line)){
}elseif(preg_match('/^[ぁ-ん]{2}$/u',$line)){
}elseif(preg_match('/^[一-龠]$/u',$line)){
}elseif(preg_match('/^[一-龠]{2}$/u',$line)){
}elseif(preg_match('/^[!]/',$line)){
}elseif(preg_match('/^["]/',$line)){
}elseif(preg_match('/^[#]/',$line)){
}elseif(preg_match('/^[$]/',$line)){
}elseif(preg_match('/^[%]/',$line)){
}elseif(preg_match('/^[&]/',$line)){
}elseif(preg_match('/^[(]/',$line)){
}elseif(preg_match('/^[)]/',$line)){
}elseif(preg_match('/^[*]/',$line)){
}elseif(preg_match('/^[+]/',$line)){
}elseif(preg_match('/^[-]/',$line)){
}elseif(preg_match('/^[,]/',$line)){
}elseif(preg_match('/^[:]/',$line)){
}elseif(preg_match('/^[;]/',$line)){
}elseif(preg_match('/^[<]/',$line)){
}elseif(preg_match('/^[>]/',$line)){
}elseif(preg_match('/^[=]/',$line)){
}elseif(preg_match('/^[?]/',$line)){
}elseif(preg_match('/^[@]/',$line)){
}elseif(preg_match('/^[_]/',$line)){
}elseif(preg_match('/^[{]/',$line)){
}elseif(preg_match('/^[}]/',$line)){
}elseif(preg_match('/^[|]/',$line)){
}elseif(preg_match('/^[~]/',$line)){
}else{
var_dump( fputs($fp, $line) ); }
}
}
?>