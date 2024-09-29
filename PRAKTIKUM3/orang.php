<?php

class Orang{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    public function ucapkansalam(){
        echo "Assalamualaikum Perkenalkan Nama Saya ".$this->nama . "<br>";
    }
       
    
}
