<?php

class Tripulante extends Pessoa {
    
    protected $cargo;
    protected float $pesoBagagemT;

    public function __construct(string $nome, string $cpf, string $cargo, float $pesoBagagemT)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
        $this->pesoBagagemT = $pesoBagagemT;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setPesoBagagem($pesoBagagem) {
        $this->pesoBagagemT = $pesoBagagem;
    }

    public function getCargo(): string {
        return $this->cargo;
    }

    public function getPesoBagagem(): float {
        return $this->pesoBagagemT;
    }

}