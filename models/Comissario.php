<?php

class Comissario extends Tripulante
{
    protected float $tempoDeVoo;
    protected string $funcao;
    protected string $idioma;

    public function __construct(string $nome, int $idade, string $cpf, float $tempoDeVoo, string $idioma, string $funcao, float $pesoBagagem)
    {
        parent::__construct($nome, $idade, $cpf, $pesoBagagem);
        $this->tempoDeVoo = $tempoDeVoo;
        $this->funcao = $funcao;
        $this->idioma = $idioma;
    }

    public function setTempoDeVoo(float $tempoDeVoo): void
    {
        $this->tempoDeVoo = $tempoDeVoo;
    }

    public function setFuncao(string $funcao): void
    {
        $this->funcao = $funcao;
    }

    public function setIdioma(string $idioma): void
    {
        $this->idioma = $idioma;
    }

    public function getTempoDeVoo(): float
    {
        return $this->tempoDeVoo;
    }

    public function getFuncao(): string
    {
        return $this->funcao;
    }

    public function getIdioma(): string
    {
        return $this->idioma;
    }
}