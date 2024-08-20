<?php

class ContaBancaria{ 
    private $numeroConta;
    private $nomeTitular;
    private $saldo=0;


    function __construction($numeroConta, $nomeTitular) {

    $this->numeroConta = $numeroConta;
    $this->numeroTitular = $numeroTitular;

  }

  function exibirSaldo(){
    echo "O saldo da sua conta é:" . $this->saldo . PHP_EOL;
  }


function depositar($quantia){
    $this->saldo += $quantia;
    echo "Deposito efetuado de {$quantia} , o saldo atual é de:" . $this->saldo . PHP_EOL;
}

function sacar($quantia){
    if ($quantia > $this->saldo) {
        echo "Saldo insuficiente." . PHP_EOL;
        return;
    }
    $this->saldo -= $quantia;
    echo "Saque realizado de {$quantia}, o valor atual da seu aconta é de:" . $this->saldo . PHP_EOL;
}

}


$conta = new contaBancaria(5423,'Yasmim');
$conta->exibirSaldo();
$conta->depositar(5000000);
$conta->depositar(75100000);
$conta->sacar(50);