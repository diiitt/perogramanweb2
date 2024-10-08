<?php

require_once "buku.php";

class daftarbuku{

    public function getdata(){
        $daftar_buku = array (
            new buku('Belajar Pemrograman Web', 'andi pratama.', 'informatika', '2004'),
            new buku('  matematika Diskrit', 'joko anwar', 'apriliandi','2020'),
            new buku('Kalkulus', 'adhit a.', 'nafiz', '2019'),
            new buku('metodologi penelitian', 'james w.', 'pustaka UIN', '2024'),

        );

        return $daftar_buku;
    }

    public function getkolomtabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'tahun');
    }
}