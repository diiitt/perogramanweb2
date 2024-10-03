<?php

class orang{
    protected $nama;

    public function setnama ($nama){
        $this->nama = $nama; 
    }

    public function ucapsalam(){
        echo "hello perkenalkan nama saya " . $this->nama . "<br>";
    }

}