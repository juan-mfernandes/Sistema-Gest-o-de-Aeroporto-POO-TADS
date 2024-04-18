<?php

//AUTOLOAD SERA IMPLEMENTADO EM BREVE
require_once ("./models/Pessoa.php");
require_once ("./models/Tripulante.php");
require_once ("./models/Piloto.php");
require_once ("./models/Aeronave.php");
require_once ("./models/Passageiro.php");
require_once ("./models/Voo.php");
require_once ("./models/Cidade.php");
require_once ("./models/Aeroporto.php");
require_once ("./models/Comissario.php");

//Cidades dos Voos
$cidadeA = new Cidade("Maringa", "PR", "Brasil");
$cidadeB = new Cidade("Santa Catarina", "SC", "Brasil");
$cidadeC = new Cidade("Curitiba", "PR", "Brasil");

//Aeroporto dos Voos
$aeroporto1 = new Aeroporto("Aeroporto Internacional de Santa Catarina", $cidadeB);
$aeroporto2 = new Aeroporto("Aeroporto Internacional de Maringa", $cidadeA);
$aeroporto3 = new Aeroporto("Aeroporto Internacional de Curitiba", $cidadeC);

//Aeronaves
$aeronave1 = new Aeronave("Boeing 5237", 500, 50000, "Ativa");
$aeronave2 = new Aeronave("Boeing 7000", 700, 80000, "Ativa");

//Integrantes do Voo
$tripulante1 = new Tripulante("Anderson Silva", "0555555", "Coronel das Forcas Armadas", 25);
$tripulante2 = new Tripulante("Joao Paulo do Santos", "055445", "Pedreiro", 30);
$tripulante3 = new Tripulante("Tais", "055445", "Professor", 30);

//Passageiros
$passageiro1 = new Passageiro("Kobe Bryant", 123456789, "0001", 35);
$passageiro2 = new Passageiro("Marilia Mendonça", 987654321, "0002", 38);
$passageiro3 = new Passageiro("Gabriel Diniz", 54321987, "0003", 29);

//Pilotos
$piloto1 = new Piloto("Cleber Machado", 42 ,888555222, 900, 30);
$piloto2 = new Piloto("Andre Matos", 33, 447711224, 500, 80);

//Comissarios
$comissario1 = new Comissario("Mariana", 26, "445566776", 232, "Ingles", "Chefe de cabine", 65);
$comissario2 = new Comissario("Alana", 22, "789452365", 120, "Ingles", "Comissario auxiliar", 50);

//Voos
$voo1 = new Voo($aeroporto1, $aeroporto2, $aeronave1);

// Pilotos
$voo1->setPiloto($piloto1);
$voo1->setPiloto($piloto2);

//Tripulantes
$voo1->adicionarTripulante($tripulante1);
$voo1->adicionarTripulante($tripulante2);
$voo1->adicionarTripulante($tripulante3);

//Comissarios
$voo1->adicionarComissario($comissario1);

//Informacoes do Voo

//Check-In
$voo1->realizaCheckIn($passageiro1);
$voo1->realizaCheckIn($passageiro2);
$voo1->realizaCheckIn($passageiro3);

//Codigo Voo
$codigoDoVoo = $voo1->getCodigoVoo();
echo "\nCodigo do voo: " . $codigoDoVoo . "\n";

//Aeroportos Origem e Destino
$origem = $voo1->getOrigem()->getNome();
echo "\nAeroporto origem: " . $origem . "\n";
$destino = $voo1->getDestino()->getNome();
echo "Aeroporto destino: " . $destino . "\n";

//Escalas de Voo
$voo1->setEscala($aeroporto3);
$escalaDeParada = $voo1->getEscala();
echo "\nEscala de parada: \n";
foreach($escalaDeParada as $valor => $parada) {
    echo "Parada " .$valor+1 . ": " . $parada->getNome() . "\n";
}

//Pilotos do Voo
$pilotos = $voo1->getPiloto();
echo "\nPilotos do voo: \n";
foreach ($pilotos as $valor => $p) {
    echo "Piloto ". $valor+1 . ": ". $p->getNome() . "\n";
}

//Comissarios do Voo
echo "\nComissarios de Bordo: ";
$comissarios = $voo1->getComissario();
foreach ($comissarios as $valor => $c) {
    echo "\nComissario(a) ". $valor+1 . ": ". $c->getNome() . "\n";
}

//Previsao do tempo de voo
echo "\nPrevisao de tempo de voo: ";
$aeronave1->setVelocidade(900);
$mostraTempo = $voo1->calculaTempoDeVoo(250);
echo $mostraTempo . "\n";

//Mostra total de passageiros comerciais
$totalPassageiros = $voo1->getTotalPassageiros();
echo "\nTotal de Passageiros: " . $totalPassageiros . "\n";

//Mostra total de tripulantes
$totalTripulantes = $totalTripulantes = $voo1->getTotalTripulantes();
echo "\nTotal de Tripulantes: " . $totalTripulantes . "\n";

//IMPLEMENTACOES FUTURAS
