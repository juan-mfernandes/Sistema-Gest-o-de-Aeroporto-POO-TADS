<?php

class Pessoa
{
    protected string $nome;
    protected int $idade;
    protected string $cpf;
    protected string $genero;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
    public function getCpf(): string {
        return $this->cpf; 
    }

	public function setGenero(string $genero): void {
        $this->genero = $genero;
    }

	public function getGenero(): string {
        return $this->genero;
    }

	
	
}