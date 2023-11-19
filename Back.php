<?php

class Estacionamento{
    public $modeloDoCarro;
    public $placaDoCarro;
    public $horaEntrada;
    public $horaSaida;
    public $valorApagar;



    function __construct($modeloDoCarro, $placaDoCarro, $horaEntrada, $horaSaida, $valorApagar){
        $this->modeloDoCarro = $modeloDoCarro;
        $this->placaDoCarro = $placaDoCarro;
        $this->horaEntrada = $horaEntrada;
        $this->horaSaida = $horaSaida;
        $this->valorApagar = $valorApagar;
    }

    function getModeloDoCarro(){
        return $this->modeloDoCarro;
    }

    function setModeloDoCarro($modeloDoCarro){
        $this->modeloDoCarro = $modeloDoCarro;
    }

    function getPlacaDoCarro(){
        return $this->placaDoCarro;
    }

    function setPlacaDoCarro($placaDoCarro){
        $this->placaDoCarro = $placaDoCarro;
    }

    function getHoraEntrada(){
        return $this->horaEntrada;
    }

    function setHoraEntrada($horaEntrada){
        $this->horaEntrada = $horaEntrada;
    }

    function getHoraSaida(){
        return $this->horaSaida;
    }

    function setHoraSaida($horaSaida){
        $this->horaSaida = $horaSaida;
    }

    function getValorApagar(){
        return $this->valorApagar;
    }

    function setValorApagar(){
        $horaEntrada = new DateTime($this->horaEntrada);
        $horaSaida = new DateTime($this->horaSaida);
        $intervalo = $horaEntrada->diff($horaSaida);
        $horas = $intervalo->h;
        $this->valorApagar = 20 + ($horas * 10);
    }
    public function __toString() {
        return "Carro: $this->modeloDoCarro, Placa: $this->placaDoCarro, Hora de Entrada: $this->horaEntrada, Hora de Saída: $this->horaSaida, Valor a Pagar: $this->valorApagar";
    }
}


  
    

   