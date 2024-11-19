<?php 

require_once "model/DaftarBuku.php";

class bukucontroller{

    public function jalankan(){
        //mengakses model
        $data = new daftarbuku();
        //memberi data model ke view dan menampilkan data 
        include "view/bukuview.php";



      
    }
    public function simpan(){
        $buku = new buku ($_POST['judul'], $_POST['pengarang'],$_POST['penerbit'], $_POST['tahun']);

        $daftar_buku = new daftarbuku();
        $daftar_buku->simpan($buku);
        
        header( 'Location: http://localhost/index.php');
        exit;
    }
    public function hapus (){
        $id = $_POST['id_hapus'];


        $daftar_buku = new daftarbuku();
        $daftar_buku->hapus($id);

        header( 'Location: http://localhost/index.php');
        exit;
    }
    public function edit (){
        //index.php/edit?id=5

        //menangkap nilai query string id dari view

        $id = $_GET['id'];

        //membuat objek model daftar buku
        $daftar_buku = new daftarbuku();

        //mengambil dan membuat oblek model buku berdasarkan id buku dari objek daftar_buku
        $buku = $daftar_buku->getBukuById($id);

        //jika buku ada atau ketemu
        if($buku){
        //tampilkan view edit buku
            include_once "view/editbukuView.php";
        }else{
            header("Location: http://localhost/index.php");
        }
    }
    public function update(){
        $buku = new Buku($_POST ['judul'], $_POST ['pengarang'], $_POST ['penerbit'], $_POST ['tahun']);
        $buku->setId($_POST['id']);

        $daftar_buku = new daftarbuku();
        $daftar_buku->update($buku);

        header('Location: http://localhost/index.php');
    }

}