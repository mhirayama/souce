<?php
$fread = fopen("data/yourname.txt", "r");
$fwrite = fopen("data/yourname.csv", 'w' );

$exe_path = '/usr/local/mecab/bin/mecab -O wakati';

while ($line = fgets($fread)) {
$line01 = explode(' ', `echo '$line' | $exe_path`);
$line02 = implode("\n", $line01);

var_dump(fputs($fwrite, $line02) );
}
