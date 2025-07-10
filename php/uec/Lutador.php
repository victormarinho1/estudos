<?php

class Lutador
{
    private $name;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


    public function __construct($name, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->name = $name;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setNacionalidade($nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }
    
    private function setCategoria(): void
    {
        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }else if($this->peso <=70.3){
            $this->categoria = "Leve";
        }else if($this->peso <= 83.9){
            $this->categoria = "Médio";
        }else if($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }      
    }   
    
    public function setPeso($peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setVitorias($vitorias): void
    {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void
    {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void
    {
        $this->empates = $empates;
    }


    public function apresentar() {
        echo "Lutador: " . $this->getName();
        echo "<br>Origem: " . $this->getNacionalidade();
        echo "<br>".$this->getIdade() . " anos<br>";
        echo $this->getAltura() . " m de altura<br>";
        echo "Pesando " . $this->getPeso() . "Kg";
        echo "<br>Ganhou:" . $this->getVitorias();
        echo "<br>Perdeu:" . $this->getDerrotas();
        echo "<br>Empatou: " . $this->getEmpates();

        echo "<hr>";
    }

    public function status() {
      echo $this->getName();
      echo "<br>é um peso " . $this->getCategoria();
      echo "<br>".$this->getVitorias() . " vitórias<br>";
      echo $this->getDerrotas() . " derrotas<br>";
      echo $this->getEmpates() . " empates";
        echo "<hr>";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}
