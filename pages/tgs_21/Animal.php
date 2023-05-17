<?php

Class Animal {
    public $nama;
    public $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini bernama " . $this->nama . " dan jenisnya adalah " . $this->jenis . ".";
    }
}



?>