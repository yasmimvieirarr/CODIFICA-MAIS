<?php

do {
    echo "Digite o valor de a: ";
    $a = (int)trim(fgets(STDIN));

    echo "Digite o valor de b: ";
    $b = (int)trim(fgets(STDIN));

    if ($a > $b) {
        echo "O valor de a deve ser menor ou igual ao valor de b. Por favor, tente novamente." . PHP_EOL;
    }
} while ($a > $b);

$soma = 0;

for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}

echo "A soma de todos os números ímpares no intervalo [$a, $b] é: $soma" . PHP_EOL;
