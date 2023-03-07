<?php
require_once 'Pessoa.php';

class Funcionario extends Pessoa{

    private $setor;
    private $trabalhando;

    public function mudarTrabalho(){
       $this->trabalhando = ! $this->trabalhando;
    }   

    public function get_setor(){
        return $this->setor;
    }

    public function set_setor($setor){
        $this->setor = $setor;
    }

    public function get_trabalhando(){
        return $this->trabalhando;
    }

    public function set_trabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }


    
}




?>