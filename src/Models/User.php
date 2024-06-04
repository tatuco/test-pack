<?php

namespace Luis\QueoModels;

class User {

    public function __contruct($name) {
        $this->name = $name;
    }

    public function saluda() {
        echo 'hola '.$this->name;
    }
}