<?php

function encontrarElementoEIndice($array, $numero) {
    $posicoes = [];
    foreach ($array as $indice => $elemento) {
        if ($elemento == $numero) {
            $posicoes[] = $indice;
        }
    }
    return $posicoes;
}

$numeros = [];
for ($i = 1; $i <= 7; $i++) {
    $numero = (int)readline("Digite o número $i: ");
    $numeros[] = $numero;
}

$numeroParaBuscar = (int)readline("Digite o número a ser buscado no array: ");
$posicoes = encontrarElementoEIndice($numeros, $numeroParaBuscar);

if (!empty($posicoes)) {
    echo "O número $numeroParaBuscar está presente na(s) seguinte(s) posição(ões): ";
    foreach ($posicoes as $posicao) {
        echo $posicao . " ";
    }
    echo "\n";
} else {
    echo "O número $numeroParaBuscar não está presente no array.\n";
}

?>