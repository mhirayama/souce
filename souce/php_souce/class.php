<?php
class human{
    public $name;
    public $age; 
    public function speak($something){
        print $this->name . '「'.$something.'」';
    }
}

$yamada = new human();
$yamada->name = '山田';
$yamada->age = 32;
$yamada->speak('私は山田です。');
print "<br>";
print $yamada->age;
?>