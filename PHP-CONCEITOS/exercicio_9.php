<?php

echo "Digite uma série de números inteiros. Digite -1 para parar a entrada." . PHP_EOL;

$numeros = [];

while (true) {
    echo "Digite um número (ou -1 para terminar): ";
    $numero = (int)trim(fgets(STDIN));

    if ($numero == -1) {
        break;
    }

    $numeros[] = $numero;
}

if (!empty($numeros)) {

    $maior = max($numeros);
    $menor = min($numeros);

    echo "O maior número digitado foi: $maior" . PHP_EOL;
    echo "O menor número digitado foi: $menor" . PHP_EOL;
} else {
    echo "Nenhum número válido foi digitado." . PHP_EOL;
}
