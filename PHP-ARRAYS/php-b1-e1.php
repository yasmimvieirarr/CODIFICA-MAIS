<?php

function encontrarMenorValor($numeros) {
    if (empty($numeros)) {
        return null;
    }

    $menorValor = $numeros[0];

    foreach ($numeros as $numero) {
        if ($numero < $menorValor) {
            $menorValor = $numero;
        }
    }

    return $menorValor;
}

$numeros = [];
for ($i = 1; $i <= 10; $i++) {
    $numeros[] = readline("Digite o número $i: ");
}

$menorValor = encontrarMenorValor($numeros);
echo "O menor valor é: $menorValor\n";

?>