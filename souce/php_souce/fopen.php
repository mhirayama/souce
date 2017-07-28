<?php
$file = fopen("name.csv", "r");

while($line = fgetcsv($file)){
print $line[0].",";
print $line[1].",";
print $line[2];
print "<br>";
}
?>