<?php 

require_once "MODEL/daftarbuku.php";

class bukucontroller{
    public function jalankan(){

        // mengakses model
        $data = new daftarbuku();

        // memberi model ke view dan menampilkan view 
        include "VIEW/bukuview.php";
    }
}