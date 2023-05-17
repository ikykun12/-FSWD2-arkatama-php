<?php

require_once 'Animal.php';
class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function getInfo() {
        return parent::getInfo() . " Kucing adalah hewan yang lucu dan suka bermain.";
    }
}

?>