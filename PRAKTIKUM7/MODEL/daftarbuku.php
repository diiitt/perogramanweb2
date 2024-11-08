<?php

require_once "Buku.php";
require_once "Database/database.php";
class daftarbuku{

    private $Koneksi;

    public function __construct()
    {
        $db = new Database();
        $this->Koneksi = $db->getKoneksi();
    }

    public function getData(){
       $db = new Database();
       $koneksi = $db->getKoneksi();

       $daftar_buku = [];

       $sql = "SELECT * FROM buku";
        $query = $koneksi->query ($sql);

        if($query->num_rows >0){
            while($row = $query->fetch_assoc()){
                $buku = new Buku ($row['Judul'], $row['Pengarang'], $row['Penerbit'], $row['Tahun']);
                $buku->setId($row['id']);
                array_push($daftar_buku, $buku);
            }
        }
        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

    public function simpan ($buku){
        $db = new Database();
        $koneksi = $db->getKoneksi();

    $sql = "INSERT INTO buku VALUES ('".$buku->getJudul()."', '".$buku->getPengarang()."', '".$buku->getPenerbit()."', '".$buku->getTahun()."')";
    }

    public function hapus ($id){
        $sql = "DELETE FROM buku WHERE id= " . $id;

        $query = $this->Koneksi->query($sql);
        return $query;

    }

    public function update ($buku){
        $sql = "UPDATE buku SET judul = '". $buku->getJudul()."',  pengarang = ". $buku->getPengarang()."', penerbit = ". $buku->getPenerbit()."', tahun = ". $buku->getTahun()." WHERE id = ". $buku->getId();

        $query = $this->Koneksi->query($sql);
        return $query;
    }

}