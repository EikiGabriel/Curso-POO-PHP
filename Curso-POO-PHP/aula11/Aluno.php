<?php

class Aluno extends Pessoa{
    protected $matricula;
    protected $curso;


    public function pagarMensalidade(){
       echo "<p>Pagando a mensalidade de" . $this->get_nome() . "</p>"; 
    }

    public function get_matricula(){
        return $this->matricula;
    }

    public function set_matricula($matricula){
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