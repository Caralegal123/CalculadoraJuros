<?php

class Operacao
{

    // Atributos

    private $dinheiro;
    private $tempo;
    private $porcentagemjuros;
    private $juros;

    // Construtor

    function __construct(){
        $this->dinheiro = 0;
        $this->tempo = 0;
        $this->porcentagemjuros = 0;
        $this->juros = 0;
    }

    // Getters e setters

    // Setters

    public function setDinheiro($dinheiro){
        $this->dinheiro = $dinheiro;
    }

    public function setTempo($tempo){
        $this->tempo = $tempo;
    }

    public function setPctJuros($pct){
        $this->porcentagemjuros = $pct;
    }

    // Getters

    public function getDinheiro(){
        return $this->dinheiro;
    }

    public function getTempo(){
        return $this->tempo;
    }
    
    public function getPctJuros(){
        return $this->porcentagemjuros;
    }

    public function getJuros(){
        return $this->juros;
    }

    public function getDivida(){
        return $this->juros + $this->dinheiro;
    }

    // Metódos

    public function CalcularJuros(){
        $this->juros = $this->dinheiro * $this->porcentagemjuros / 100 * $this->tempo;
    }

}