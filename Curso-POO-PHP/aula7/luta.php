<?php

require_once 'aula7.php';

class Luta{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function marcarLuta($l1, $l2){
        if($l1->get_categoria() == $l2->get_categoria() && ($l1 != $l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante= $l2;
        } else{
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
    }

    public function Lutar(){
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<p>Empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<p>". $this->desafiado->get_nome() ." venceu a luta</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<p>". $this->desafiante->get_nome() ." venceu a luta</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();    
                    break;
            }
        }else{
            echo "<p>Luta não pode acontecer</p>";
        }
    }


    ///set e get


    function get_desafiado(){
        return $this->desafiado;
    }

    function set_desafiado(){
        $this->desafiado = $desafiado;
    }

    function get_desafiante(){
        return $this->deafiante;
    }

    function set_desafiante(){
        $this->desafiante = $desafiante;
    }

    function get_rounds(){
        return $this->rounds;
    }

    function set_rounds(){
        $this->rounds = $rounds;
    }

    function get_aprovada(){
        return $this->aprovada;
    }

    function set_aprovada(){
        $this->aprovada = $aprovada;
    }
}













?>