<?php


class Lutado{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
        $this->set_nome($no);
        $this->set_nacionalidade($na);
        $this->set_idade($id);
        $this->set_altura($al);
        $this->set_peso($pe);
        $this->set_vitorias($vi);
        $this->set_derrotas($de);
        $this->set_empates($em);
    }

     function get_nome(){
        return $this->nome;
    }

     function set_nome($nome){
        $this->nome = $nome;
    }

     function get_nacionalidade(){
        return $this->nacionalidade;
    }

     function set_nacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

     function get_idade(){
        return $this->idade;
    }

     function set_idade($idade){
        $this->idade = $idade;
    }

     function get_altura(){
        return $this->altura;
    }

     function set_altura($altura){
        $this->altura = $altura;
    }

     function get_peso(){
        return $this->peso;
    }

     function set_peso($peso){
        $this->peso = $peso;
        $this->set_categoria();
    }

     function get_categoria(){
        return $this->categoria;
    }

     function set_categoria(){
      if($this->get_peso() < 52.2){
        $this->categoria = "Inválido";
      } elseif($this->get_peso() <= 70.3) {
        $this->categoria = "Leve";
      } elseif($this->get_peso() <= 83.9) {
        $this->categoria = "Médio";
      } elseif($this->get_peso() <= 120.2) {
        $this->categoria = "Pesado";
      } else {
        echo "<br>Peso Invalido";
      }
    }

     function get_vitorias(){
        return $this->vitorias;
    }

     function set_vitorias($vitorias){
        $this->vitorias = $vitorias;
    }

     function get_derrotas(){
        return $this->derrotas;
    }

     function set_derrotas($derrotas){
        $this->derrotas = $derrotas;
    }

     function get_empates(){
        return $this->empates;
    }

     function set_empates($empates){
        $this->empates = $empates;
    }

                ///---Metodos do Controlador---\\\

    public function apresentar(){
        echo "<p>----------------</p>";
        echo "<p>O lutar" . $this->get_nome();
        echo "Veio diretamente de" . $this->get_nacionalidade();
        echo "Tem" . $this->get_idade() ."anos e pesa" . $this->get_peso();
        echo "<br>Ele tem" . $this->get_vitorias() . "vitorias";
        echo $this->get_derrotas() . " derrotas e " . $this->get_empates() . "</p>";
    }

    public function status(){
        echo "<p>----------------</p>";
        echo "<p>" . $this->get_nome() . " é um peso " . $this->get_categoria(); 
        echo " e já ganhou " . $this->get_vitorias() . " vezes ";
        echo " pedeu " . $this->get_derrotas();
        echo " pedeu " . $this->get_derrotas();
        echo " empatou " . $this->get_empates() . " vezes ";
     }

    public function ganharLuta(){
       $this->set_vitorias($this->get_vitorias() + 1);
    }

    public function perderLuta(){
        $this->set_derrotas($this->get_derrotas() + 1);
    }

    public function empatarLuta(){
        $this->set_empates($this->get_empates() + 1);;
    }

}

?>