<?php

class Caneta{
   public $modelo;
   public $cor;
   private $ponta;
   protected $carga;
   protected $tampada;


    public function rabiscar(){
        if($this->tampada == false){
            echo "<p>Estou rabiscando.....</p>";
        }else{
            echo "<p>Erro não posso rabiscar.....</p>";
    
        }
    
    }

    public function escrever(){

    }
    
    public function tampar(){
        $this->tampada = true;
    }
    
    public function destampar(){
        $this->tampada = false;
    
    }
}


?>