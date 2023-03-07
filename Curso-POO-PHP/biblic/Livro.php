<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
    }





    public function get_titulo(){
        return $this->titulo;
    }

    public function set_titulo($titulo){
        $this->titulo = $titulo;
    }

    public function get_autor(){
        return $this->autor;
    }

    public function set_autor($autor){
        $this->autor = $autor;
    }

    public function get_totPaginas(){
        return $this->totPaginas;
    }

    public function set_totPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function get_pagAtual(){
        return $this->pagAtual;
    }

    public function set_pagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function get_aberto(){
        return $this->aberto;
    }

    public function set_aberto($aberto){
        $this->aberto = $aberto;
    }

    public function get_leitor(){
        return $this->leitor;
    }

    public function set_leitor($leitor){
        $this->leitor = $leitor;
    }


    public function detalhes(){
        echo "Livro " . $this->get_titulo() . " escrito por " . $this->get_autor();
        echo "<br> Paginas: " . $this->get_totPaginas();
        echo "<br> Sendo lido por " . $this->leitor->get_nome();
    }



    ///publicação\\\
    public function abrir(){
        $this->set_aberto(true);
    } 

    public function fechar(){
        $this->set_aberto(false);
    }

    public function folhear($p){
        if($p > $this->get_totPaginas1()){
            $this->set_pagAtual(0);
        } else{ 
            $this->set_pagAtual($p);
        }
    }

    public function avancarPag(){
        $this->set_pagAtual($this->get_pagAtual() + 1);
        if($this->get_pagAtual() > $this->get_totPaginas()){
            $this->set_pagAtual($this->get_pagAtual() - 1);
        }
    }

    public function voltarPag(){
        $this->set_pagAtual($this->get_pagAtual() - 1);
        if($this->get_pagAtual() < 0){
            $this->set_pagAtual($this->get_pagAtual() + 1);
        }
    }


}
?>