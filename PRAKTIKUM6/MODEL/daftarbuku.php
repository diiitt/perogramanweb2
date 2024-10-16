<?php

require_once "buku.php";
require_once "DATABASE/database.php";

class daftarbuku{

    public function getdata(){
        $db = new database();
        $koneksi = $db->getkoneksi();

        $daftar_buku = [];

        $sql ="SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($row = $query->fetch_assoc()){
                $buku = new buku ($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getkolomtabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }
}