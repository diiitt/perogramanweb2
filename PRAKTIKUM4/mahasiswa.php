<?php

require_once "orang.php";
require_once "nilai.php";

class mahasiswa extends orang{
    protected string $nim;
    protected nilai $nilai;

    public function setNim($nim){
        $this->nim = $nim;
    }

    public function setNilai($nilai){
        $this->nilai = $nilai;
    }

    public function getNim (){
        return $this->nim;
    }

    public function getNilai (){
        return $this->nilai;
    }


public function tampilkandata(){
    echo "Nama : " . $this->nama . "<br>";
    echo "Nim : " . $this->nim . "<br>";
    echo "Nilai Tugas : " . $this->nilai->getTugas() . "<br>";
    echo "Nilai UTS : " . $this->nilai->getUts() . "<br>";
    echo "Nilai UAS : " . $this->nilai->getUas() . "<br>";
}
}