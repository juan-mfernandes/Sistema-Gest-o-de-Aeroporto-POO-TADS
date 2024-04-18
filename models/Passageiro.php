<?php

class Passageiro extends Pessoa {
    private string $passaporte;
    private bool $checkIn = false;
    private float $pesoBagagem;

    public function __construct(string $nome, string $cpf, string $passaporte, float $pesoBagagem) {
        parent::__construct($nome, $cpf);
        $this->passaporte = $passaporte;
        $this->pesoBagagem = $pesoBagagem;
    }

    public function setCheckIn(): void {
        if(!$this->checkIn === true) {
            $this->checkIn = true;
        } else {
            echo "Este passageiro já fez o  check-in.";
        }
    }
    
    public function setPassaporte($passaporte): void {
        $this->passaporte = $passaporte;
    }

    public function getPassaporte(): string {
        return $this->passaporte;
    }

    public function setPesoBagagem(float $peso): void {
        $this->pesoBagagem = $peso;
    }

    public function getPesoBagagem(): float {
        return $this->pesoBagagem;
    }

    
}