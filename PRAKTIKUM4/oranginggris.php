<?php

require_once "orang.php";

class oranginggris extends orangbiasa{

    //override
    public function ucapsalam()
    {
        echo "hello my name is " . $this->nama . "<br>";
    }
}