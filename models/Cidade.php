<?php

class Cidade {
    private string $nome;
    private string $estado;
    private string $pais;

    public function __construct(string $nome, string $estado, string $pais)
    {
        $this->nome = $nome;
        $this->estado = $estado;
        $this->pais = $pais;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEstado(): string {
        return $this->estado;
    }

    public function getPais(): string {
        return $this->pais;
    }
}