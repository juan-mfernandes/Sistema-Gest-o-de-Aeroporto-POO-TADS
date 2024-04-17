<?php 

class Aeronave 
{
    private string $modelo;
    private int $capacidadePassageiros;
    private int $capacidadeBagagem; 
    private string $status;
    private float $velocidade; //atributo provisorio

    public function __construct(string $modelo, int $capacidadePassageiros, int $capacidadeBagagem, string $status)
    {
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePassageiros;
        $this->capacidadeBagagem = $capacidadeBagagem;
        $this->status = $status;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getModelo(): string {
        return $this->modelo;
    }

    public function setVelocidade($velocidade): void {
        $this->velocidade = $velocidade;
    }

    public function getVelocidade(): float {
        return $this->velocidade;
    }

    public function getCapacidadePassageiros(): int {
        return $this->capacidadePassageiros;
    }

    public function getCapacidadeBagagem(): int {
        return $this->capacidadeBagagem;
    }
    
}