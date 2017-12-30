<?php
$file = fopen("text.txt", "r");
while($line = fgets($file)){
  print $line;
}
?>