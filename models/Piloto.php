<?php

class Piloto extends Tripulante {

    private float $horasDeVoo;

    public function __construct(string $nome, int $idade ,string $cpf, float $horasDeVoo, $pesoBagagem)
    {
        parent::__construct($nome, $idade ,$cpf, $pesoBagagem);
        $this->horasDeVoo = $horasDeVoo;
    }

    public function setTempoDeVoo($horasDeVoo) {
        $this->horasDeVoo = $horasDeVoo;
    }

    public function getTempoDeVoo(): float {
        return $this->horasDeVoo;
    }
}