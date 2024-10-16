<?php

class buku{
    protected $id; //+
    protected $judul;
    protected $pengarang;
    protected $penerbit;
    protected $tahun;

    public function __construct($judul, $pengarang, $penerbit, $tahun)
    {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->penerbit = $penerbit;
        $this->tahun = $tahun;
    }

    public function setid($id){
        //+
        $this->id = $id;
    }

    public function getid(){
        //+
        return $this->id;
    }

    public function getjudul(){
        return $this->judul;
    }

    public function getpengarang(){
        return $this->pengarang;
    }

    public function getpenerbit(){
        return $this->penerbit;
    }

    public function gettahun(){
        return $this->tahun;
    }
}