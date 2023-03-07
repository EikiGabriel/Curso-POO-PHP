<?php
require_once 'Pessoa.php';

class Professor extends Pessoa{

    private $especialidade;
    private $salario;

    public function receberAumento($aumento){
       $this->salario += $aumento;
    }   

    public function get_especialidade(){
        return $this->especialidade;
    }

    public function set_especialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function get_salario(){
        return $this->salario;
    }

    public function set_salario($salario){
        $this->salario = $salario;
    }


    
}




?>