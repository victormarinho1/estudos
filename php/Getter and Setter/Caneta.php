<?php

class Caneta{
    private $modelo;
    private $cor;
    private $tampada;
    private $ponta;

    public function __construct($m,$c,$p){
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }

    public function tampar(){
        return $this->tampada = true;
    }
}

?>