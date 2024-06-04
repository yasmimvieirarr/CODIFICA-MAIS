<?php

echo "Digite um número: ";
$numero = trim(fgets(STDIN));

if ($numero < 2) {
    echo "{$numero} não é primo!" . PHP_EOL;
    exit(0);
}

for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
        echo "{$numero} não é primo!" . PHP_EOL;
        exit(0);
    }
}

echo "{$numero} é primo!" . PHP_EOL;
