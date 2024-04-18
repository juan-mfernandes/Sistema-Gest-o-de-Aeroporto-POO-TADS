<?php

class Voo
{
    private string $prefixo;
    private static int $codigo = 0;
    private array $tripulante = [];
    private array $passageiro = [];
    private array $comissario = [];
    private array $piloto = [];
    private array $escala = [];
    private Aeronave $aeronave;
    private Aeroporto $aeroportoOrigem;
    private Aeroporto $aeroportoDestino;


    public function __construct(Aeroporto $aeroportoOrigem, Aeroporto $aeroportoDestino, Aeronave $aeronave)
    {
        $this->prefixo = "IA";
        self::$codigo++;
        $this->aeroportoOrigem = $aeroportoOrigem;
        $this->aeroportoDestino = $aeroportoDestino;
        $this->aeronave = $aeronave;
    }

    public function getCodigoVoo(): string
    {
        return $this->prefixo . self::$codigo;
    }

    public function adicionarTripulante(Tripulante $tripulante)
    {
        $this->tripulante[] = $tripulante;
    }

    public function getTripulantes(): array
    {
        return $this->tripulante;
    }

    public function getPassageiro(): array
    {
        return $this->passageiro;
    }

    public function setPiloto(Piloto $piloto)
    {
        array_push($this->piloto, $piloto);
    }

    public function getPiloto(): array
    {
        return $this->piloto;
    }

    public function adicionarComissario(Comissario $comissario): void {
        array_push($this->comissario, $comissario);
    }

    public function  getComissario() : array {
        return $this->comissario;
    }

    public function setAeronave(Aeronave $aeronave)
    {
        $this->aeronave = $aeronave;
    }

    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function setOrigem(Aeroporto $aeroportoOrigem): void
    {
        $this->aeroportoOrigem = $aeroportoOrigem;
    }

    public function getOrigem(): Aeroporto
    {
        return $this->aeroportoOrigem;
    }

    public function setDestino(Aeroporto $aeroportoDestino): void
    {
        $this->aeroportoDestino = $aeroportoDestino;
    }

    public function getDestino(): Aeroporto
    {
        return $this->aeroportoDestino;
    }

    public function setEscala(Aeroporto $aeroportoParada): void {
        $this->escala[] = $aeroportoParada;
    }

    public function getEscala(): array {
        return $this->escala;
    }

    public function retornaTotalBagagem(): float
    {
        $total = 0;
        foreach ($this->passageiro as $p) {
            $total += $p->getPassageiro->getPesoBagagem();
        }

        return $total;
    }

    public function validaTotalBagagem(): bool {
        $capacidadeAeronave = $this->aeronave->getCapacidadeBagagem();
        $totalBagagem = self::retornaTotalBagagem();

        if($totalBagagem > $capacidadeAeronave) {
            return false;
        }else{
            return true;
        }
    }

    // pensando em implementar uma api do maps nessa parte futuramente
    public function calculaTempoDeVoo($distancia) {
        $tempoEmHoras = $this->aeronave->getVelocidade() / $distancia;
        $horas = floor($tempoEmHoras);
        $minutos = ($tempoEmHoras - $horas) * 60;
        return sprintf("%02d:%02d HORAS", $horas, $minutos);
    }

    public function validaPassaporte(Passageiro $passageiro): bool{ 
        $passaporte = $passageiro->getPassaporte();
        if($passaporte[0] !== '0') {
            return false; 
        }else {
            return true;
        }
    }

    public function realizaCheckIn(Passageiro $passageiro): void {
        $nomePassageiro = $passageiro->getNome(); 
        if(self::validaPassaporte($passageiro) === true ) {
            $passageiro->setCheckIn();
            array_push($this->passageiro,$passageiro);
            echo "O passageiro " . $nomePassageiro . " realizou o check-in.\n";
        }else{
            echo "O passaporte do passageiro " . $nomePassageiro . " nao e valido."; 
        }
    }

    public function getTotalPassageiros() {
        return count($this->passageiro);
    }

    public function getTotalTripulantes() {
        return count($this->tripulante);
    }
    
    
}