<?php

function duplicarElementos($array) {
    $arrayDuplicado = [];
    foreach ($array as $numero) {
        $arrayDuplicado[] = $numero * 2;
    }
    return $arrayDuplicado;
}

$numeros = [];
for ($i = 1; $i <= 6; $i++) {
    $numero = (int)readline("Digite o número: ");
    $numeros[] = $numero;
}

$arrayDuplicado = duplicarElementos($numeros);

echo "Array original: ";
foreach ($numeros as $numero) {
    echo $numero . " ";
}
echo "\n";

echo "Array duplicado: ";
foreach ($arrayDuplicado as $numero) {
    echo $numero . " ";
}
echo "\n";

?>
