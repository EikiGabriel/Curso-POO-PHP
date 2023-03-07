<?php
require_once 'Pessoa.php';

class Bolsista extends Aluno{
    private $bolsa;
    

    public function pagarMensalidade(){
        echo "<p>" . $this->get_nome() . " é bolsista ele paga com desconto</p>";
    }




    public function renovarBolsa(){
        echo "<p>Renovando Bolsa</p>";
    }


    public function get_bolsa(){
        return $this->bolsa;
    }

    public function set_bolsa($bolsa){
        $this->bolsa = $bolsa;
    }

}


?>