<?php
$fread = fopen("data/yourname.csv", "r");
$fwrite = "data/yourname_mysql.csv";
$fp = fopen( $fwrite, 'w' );

if($fread){
  while ($line = fgets($fread)) {
      if(mb_strlen("$line","UTF-8") <= 2){
        }elseif(strstr($line,' ')){
        }elseif(strstr($line,'　')){
        }elseif(strstr($line,'.')){
        }elseif(strstr($line,',')){
        }elseif(strstr($line,'https')){
        }elseif(strstr($line,'://')){
        }elseif(strstr($line,'co')){
        }elseif(strstr($line,'RT')){
        }elseif(strstr($line,'…')){
        }elseif(preg_match('/^[一-龠]$/u',$line)){
        }elseif(preg_match('/^[ぁ-ん]$/u',$line)){
        }elseif(preg_match('/^[ぁ-ん]{2}$/u',$line)){
        }elseif(preg_match('/^[0-9]$/',$line)){
        }elseif(preg_match('/^[0-9]{2}$/',$line)){
        }elseif(preg_match('/^[1-9][0-9]*$/',$line)){
        }elseif(preg_match('/^[ -\/:-@\[-`\{-\~]$/',$line)){
        }elseif(preg_match('/^[ー：？。！【】「」『』←＼／〜♪・、（）]/u',$line)){
        }elseif(preg_match('/^[a-z]$/',$line)){
        }elseif(preg_match('/^[A-Z]$/',$line)){
        }else{
var_dump(   fputs($fp, $line) );  }
}
}
 
?>