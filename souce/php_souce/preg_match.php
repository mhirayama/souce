<?php
$line = "a";
if(preg_match('/^[一-龠]$/u',$line)){
print "漢字一文字";
}elseif(preg_match('/^[ぁ-ん]$/u',$line)){
print "全角ひらがな一文字";
}elseif(preg_match('/^[0-9]$/',$line)){
print "数字一文字";
}elseif(preg_match('/^[a-z]$/',$line)){
print "半角英字小文字一文字";
}else{print "該当する文字列はありませんでした。";}
?>