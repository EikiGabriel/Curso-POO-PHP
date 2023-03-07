<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;

    public function alimentar(){
        echo "<p>Comendo Vegetais</p>";
    }

    public function emitirSom(){
        echo "<p>Som de Reptil</p>";
    }

    public function locomover(){
        echo "<p>rastejando/p>";
    }

    public function get_corEscama(){
        return $this->corEscama;
    }

    public function set_corEscama($corEscama){
        $this->corEscama = $corEscama;
    }






}
?>