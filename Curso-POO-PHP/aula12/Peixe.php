<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;

    public function alimentar(){
        echo "<p>Comendo Substancias</p>";
    }

    public function emitirSom(){
        echo "<p>Peixe não faz som</p>";
    }

    public function locomover(){
        echo "<p>Nadando </p>";
    }

    public function soltarBolha(){
        echo "<p>Soltando bolhas</p>";
    }


    public function get_corEscama(){
        return $this->corEscama;
    }

    public function set_corEscama($corEscama){
        $this->corEscama = $corEscama;
    }






}
?>