<?php

class ContaBanco{
    public $numConta;
    protected $tipo;      //cc(Conta Corrente) ou cp(Conta Poupança)
    private $dono;
    private $saldo;
    private $status;    //true(conta aberta), false(conta fechada)


                        ///---Funçoes---\\\

    public function __construct(){
        $this->set_status(false);
        $this->set_saldo(0);;
        echo "<br><p>conta criada com sucesso</p>";
    }




    public function abrirConta($tipo){
        $this->set_tipo($tipo);
        if($this->get_tipo() == "cc") {
            $this->set_saldo(50);
        } elseif ($this->get_tipo() == "cp") {
            $this->set_saldo(150);
        }
        $this->set_status(true);;
    }

    public function fecharConta($numConta, $tipo, $status){
        if($this->get_status() == false){
            echo "<br>Sua conta já está fechada\n";
        } 
        elseif($this->get_status() == true and $this->get_saldo() > 0){
            echo "<br>Você tem saldo em sua conta, saque-o, para poder fechar sua conta\n";
        }   
        elseif($this->get_status() == true and $this->get_saldo() < 0){
            echo "<br>Você está devendo para o banco, PAGUE OQ ME DEVE\n";
        }
        elseif($this->get_status() == true and $this->get_saldo() == 0){
            $this->set_status(false);
            echo "<br>Conta fechada com sucesso\n";
        }

    } 

    public function Depositar($valor){
        if($this->get_status()){
            $this->set_saldo($this->get_saldo() + $valor);
            echo "<br>Saldo atualizadado para: {$this->get_saldo()} \n";
        }
    }
    

    public function Sacar($valor){

        if($this->get_saldo() < $valor){
            echo "<br>Saque Negado\t Saque um valor que você tenha em conta";
            echo "<br>Seu saldo atual é: {$this->get_saldo()}\n";
            return;
        }
        if($this->get_saldo() >= $valor){
            $this->set_saldo($this->get_saldo() - $valor);
            echo "<br>Saque Bem Sucedido\n";
            echo "<br>Seu saldo atual é: {$this->get_saldo()} \n";
        }
    }

    public function PagarMensalidade(){
        if($this->get_status() == true){;
            if($this->get_tipo() == "cc"){
                $this->set_saldo($this->get_saldo() - 12); 
            }
            if($this->get_tipo() == "cp"){
                $this->set_saldo($this->get_saldo() - 20); 
            }
        } else {
            echo "<br>Problemas com a conta";
        }
        
    }


            ///---Funções Get e Set---\\\


    public function get_numConta(){
            return $this->numConta;
    }
            
    public function set_numConta($nc){
        $this->numConta = $nc;
    }

    public function get_tipo(){
        return $this->tipo;
    }
        
    public function set_tipo($t){
        $this->tipo = $t;
    }

    public function get_dono(){
        return $this->dono;
    }
        
    public function set_dono($d){
        $this->dono = $d;
    }

    public function get_saldo(){
        return $this->saldo;
    }
        
    public function set_saldo($valor){
        $this->saldo = $valor;
    }

    public function get_status(){
        return $this->status;
    }
        
    public function set_status($stat){
        $this->status = $stat;
    }

}
?>