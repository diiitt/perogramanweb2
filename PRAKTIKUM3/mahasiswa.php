<?php
    include "orang.php";
    class mahasiswa extends orang{
       public $nim;
       public $prodi;
       
       public function getnilaisemester(){

       }
    }

    class mahasiswaasing extends MAHASISWA {

        //OVERRIDE 
        public function ucapkansalam()
        {
            echo "hello my name " . $this->nama . "<br>"; 
        }
            
        }
    