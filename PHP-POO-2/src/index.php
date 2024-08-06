<?php

require 'autoload.php';

use Veiculos\Caminhao\Caminhao; 
use Veiculos\Carro\Carro; 
use Veiculos\Moto\Moto; 

$caminhao = new Caminhao();
echo $caminhao->detalhes() . "<br>";

$carro = new Carro();
echo $carro->detalhes() . "<br>";

$moto = new Moto();
echo $moto->detalhes() . "<br>";

?> 