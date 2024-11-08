<?php

require_once "Model/Daftarbuku.php";

class BukuController{
    public function Jalankan(){
        //mengakses model
        $data = new DaftarBuku();

        //memberi data model ke view dan menampilkan view
        include "View/BukuView.php";
    }

    public function simpan(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new DaftarBuku();
        $daftar_buku->simpan($buku);

        header('location: http://Localhost/index.php');
        exit;

    }

    public function hapus(){
        $id = $_POST['id_hapus'];

        $daftar_buku = new DaftarBuku();
        $daftar_buku->hapus($id);

        header('location: http://Localhost/index.php');
        exit;

}

}