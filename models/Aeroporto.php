<?php

class Aeroporto {
    private string $nome;
    private Cidade $cidade;
    

    public function __construct(string $nome, Cidade $cidade) 
    {
        $this->nome = $nome;
        $this->cidade = $cidade;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getCidade(): Cidade {
        return $this->cidade;
    }
}