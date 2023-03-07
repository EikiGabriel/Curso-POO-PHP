<?php

//Definindo a classe e seus atributos
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    private $carga;
    protected $tampada;
    
//Defiindo as functions da classe

    public function rabiscar(){
        if($this->tampada == true){
            echo("<p>Erro!!! Não posso rabiscar");
        } else {
            echo "<p>Estou rabiscando...<p>";
        }
    }

    private function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }
    
    
}