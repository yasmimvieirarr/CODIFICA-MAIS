<?php

function inverterArray($array) {
    return array_reverse($array);
}

$numeros = [];
for ($i = 1; $i <= 5; $i++) {
    $numero = (int)readline("Digite o número: ");
    $numeros[] = $numero;
}

$arrayInvertido = inverterArray($numeros);

echo "Array invertido: ";
foreach ($arrayInvertido as $numero) {
    echo $numero . " ";
}
echo "\n";

?>