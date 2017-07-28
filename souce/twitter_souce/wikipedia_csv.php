<?php

class Csv {
    public $fileName = null;

    public function __construct($fileName) {
        $this->fileName = $fileName;
    }

    public function make($wikipediaFile) {
        $fp = fopen($wikipediaFile, "r");
        while (!feof($fp)) {
            $title = fgets($fp);
            $title = trim($title);
            $title = mb_convert_encoding($title, 'utf-8');
 
            if (preg_match('/^\./',$title)) {
                continue;
            }
            elseif (preg_match('/^[0-9]{1,100}$/',$title)) {
                continue;
            }
            elseif (preg_match('/[0-9]{4}./',$title)) {
                continue;
            }
            if (strlen($title) > 3) {
                $line   = array();
                $line[] = $title;
                $line[] = 0;
                $line[] = 0;
                $line[] = $this->__cost(-36000,-400 * (strlen($title)^1.5));
                $line[] = '名詞' ;
                $line[] = '固有名詞';
                $line[] = '*';
                $line[] = '*';
                $line[] = '*';
                $line[] = '*';
                $line[] = $title;
                $line[] = '*';
                $line[] = '*';
                $line[] = 'wikipedia_word';
                file_put_contents($this->fileName,$this->__makeCsvString($line) . "\n",FILE_APPEND);
            }
        }
        fclose($fp);
    }
 
    private function __cost($comp, $val) {
        $max  = $comp;
        if ( $comp <= $val ) {
            $max = $val;
        }
        return (int)$max;
    }

    private function __makeCsvString($data) {
        foreach ($data as $k => $v) {
            if (preg_match("/[\",\n]/", $v)) {
                $data[$k] = '"' . str_replace('"', '""', $v) . '"';
            }
        }
        $line = implode(',', $data);
        return $line;
    }
}
$csv = new Csv('data/wiki.csv');
$csv->make('data/wiki.txt');
