<?php
require_once 'Animal.php';
class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "dog ");
    }

    public function getInfo() {
        return parent::getInfo() . " Nozy adalah yang setia dan cerdas.";
    }
}

?>