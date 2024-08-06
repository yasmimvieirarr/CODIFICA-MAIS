<?php

function somaElementosPares($numeros) {
    $soma = 0;

    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            $soma += $numero;
        }
    }

    return $soma;
}

$numeros = [];
for ($i = 1; $i <= 5; $i++) {
    $numeros[] = readline("Digite um número : ");
}

$somaPares = somaElementosPares($numeros);
echo "A soma dos elementos pares é: $somaPares\n";

?>