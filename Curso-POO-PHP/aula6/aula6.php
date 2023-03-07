<?php
require_once 'Controlador.php';


class ControleRemoto implements Controlador{
    private $volume;
    private $ligado;
    private $tocando;



    public function __construct(){
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function get_volume(){
        return $this->volume;
    }

    private function set_volume($volume){
        $this->volume = $volume;
    }

    private function get_ligado(){
        return $this->ligado;
    }

    private function set_ligado($ligado){
        $this->ligado = $ligado;
    }

    private function get_tocando(){
        return $this->tocando;
    }

    private function set_tocando($tocando){
        $this->tocando = $tocando;
    }


                ///---Metodos do Controlador---\\\

    public function ligar(){
        $this->set_ligado(true);
    }

    public function desligar(){
        $this->set_ligado(false); 
    }

    public function abrirMenu(){
        echo "<br>Está Ligado:" . ($this->get_ligado()?"SIM":"NÃO");
        echo "<br>Está Tocando:" . ($this->get_tocando()?"SIM":"NÃO");
        echo "<br>Volume:" . $this->get_Volume();
        for($i=0;$i<=$this->get_volume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu(){
        echo "Fechando Menu";
    }

    public function maisVolume(){
        if ($this->get_ligado()){
            $this->set_volume($this->get_volume()+5);
        }
    }

    public function menosVolume(){
        if ($this->get_ligado()){
            $this->set_volume($this->get_volume()-5);
        }
    }

    public function ligarMudo(){
        if($this->get_ligado() && $this->get_volume()>0){
            $this->set_volume(0);
        }
    }

    public function desligarMudo(){
        if($this->get_ligado() && $this->get_volume() == 0){
            $this->set_volume(50);
        }
    }

    public function pause(){
        if($this->get_ligado() && $this->get_tocando()){
            $this->set_tocando(false);
        }
    }

    public function play(){
        if($this->get_ligado() && !($this->get_tocando())){
            $this->set_tocando(true);
        }
    }
}


?>
