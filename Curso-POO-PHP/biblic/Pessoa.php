<?php


class Pessoa{
    ///atributos
    private $nome;
    private $sexo;
    private $idade;

    ///Construct

    public function __construct($nome, $sexo, $idade){
        $this->set_nome($nome);
        $this->set_sexo($sexo);
        $this->set_idade($idade);
    }

    

    //get e set

    public function get_nome(){
        return $this->nome;
    }

    public function set_nome($nome){
        $this->nome = $nome;
    }

    public function get_sexo(){
        return $this->sexo;
    }

    public function set_sexo($sexo){
        $this->sexo = $sexo;
    }

    public function get_idade(){
        return $this->idade;
    }

    public function set_idade($idade){
        $this->idade = $idade;
    }


}

?>