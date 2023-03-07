<?php

//Definindo a classe e seus atributos
class Caneta {
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;
        
//Defiindo as functions da classe

    public function Caneta($m, $c, $p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }


    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
    
    
}