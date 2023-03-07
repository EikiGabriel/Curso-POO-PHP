<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{

    private $matricula;
    private $curso;

    public function cancelarMatricula(){
        echo "<p>Matricula sendo cancelada</p>";
    }   

    public function get_matricula(){
        return $this->matricula;
    }

    public function set_matricula($matriucla){
        $this->matricula = $matricula;
    }

    public function get_curso(){
        return $this->curso;
    }

    public function set_curso($curso){
        $this->curso = $curso;
    }


    
}




?>