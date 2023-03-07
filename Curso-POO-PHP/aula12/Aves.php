<?php
require_once 'Animal.php';
class Aves extends Animal{
    private $corPena;

    public function alimentar(){
        echo "<p>Comendo Frutas</p>";
    }

    public function emitirSom(){
        echo "<p>Peixe de Ave</p>";
    }

    public function locomover(){
        echo "<p>Voando </p>";
    }

    public function fazerNinho(){
        echo "<p>Fazendo ninho</p>";
    }


    public function get_corPena(){
        return $this->corPena;
    }

    public function set_corPena($corPena){
        $this->corPena = $corPena;
    }



}

?>