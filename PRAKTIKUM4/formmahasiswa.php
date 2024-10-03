<?php

class form{
    protected $fields;

    public function __construct()

    {
        $this->fields = [];
    }

    public function setTextField($nama, $text){
        $label = "<div class='wrapper'><label for='" . $nama . "'>" . ucfirst($nama) . "</label>";
        $textfield = "<input class='form-input' type='text' name='" . $nama . "' value='" . $text . "'></div>";
        array_push($this->fields, $label . $textfield);
    }

    public function tampilkanform(){
        echo "<form>";
            foreach($this->fields as $field){
                echo $field;
            }

        echo "<input type='submit' value='simpan'>";
        echo "</form>";
    }
}

class formmahasiswa {

}