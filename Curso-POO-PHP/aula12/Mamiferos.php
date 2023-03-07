<?php
require_once 'Animal.php';
class Mamiferos extends Animal{
    private $corPelo;

    public function alimentar(){
        echo "<p>Mamando</p>";
    }

    public function emitirSom(){
        echo "<p>Som Mamifero</p>";
    }

    public function locomover(){
        echo "<p>correndo</p>";
    }

    public function get_corPelo(){
        return $this->corPelo;
    }

    public function set_corPelo($corPelo){
        $this->corPelo = $corPelo;
    }

}
?>

