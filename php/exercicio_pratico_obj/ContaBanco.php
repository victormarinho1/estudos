<?php
class ContaBanco{
    public numConta;
    protected tipo;
    private dono;
    private saldo;
    private status;
    
    public function __construct(){
        $this->saldo = 0;
        $this->status = false;
    }

    public function setNumConta($n){
        $this->nunConta = $n;
    }

    public function getNumConta(){
        return $this->numConta;
    }

    public function setTipo($t){
        $this->tipo = $t;
    }

    public function getTipo(){
        return $this->tipo;
    }

     public function getDono(){
        return $this->dono;
    }

    public function setDono($d){
        $this->dono = $d;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->saldo;
    }
    
    public function setStatus($s){
        $this->status = $s;
    }

    public function abrirConta($t){
        setTipo($t);
        setStatus(true);
        if($this->tipo == 'CC'){
            setSaldo(50);
        }else if($this->tipo == 'CP'){
            setSaldo(150);
        }else{
            echo("Tipo de conta inválido");
        }
    }

    public function fecharConta($c){
        if(getSaldo() > 0){
            echo "Conta com dinheiro";
        }else if(getSaldo() < 0){
            echo "Conta em débito";
        }else{
            setStatus(false);
        }
    }

    public function depositar($v){
        if(getStatus()){
            setSaldo(getSaldo() + $v);
        }else{
            echo "Impossivel depositar!!";
        }
    }

    public function sacar($v){
        if(getStatus()){
            if(getSaldo() > $v){
                setSaldo(getSaldo() - $v);
            }else{
                echo "Saldo insuficiente";
            }
        }else{
            echo "Impossivel sacar!"
        }
    }

    public function pagarMensal(){
        var $v;
        if(getTipo() == 'CC'){
            $v = 12;
        }else if(getTipo() == 'CP'){
            $v = 20;
        } 
        if(getStatus() == true){
            if(getSaldo() > $v){
                setSaldo(getSaldo() - $v);
            }else{
                echo "Saldo insuficiente";
            }
        }
    }

   
}


?>