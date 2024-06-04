<?php

$numero = readline("Digite um número para a tabela de multiplicação: ");

echo "A tebale de multiplicação para o número $numero:\n";
for ($i = 1; $i <=10; $i++) {
    echo "$numero x$i = " . ($numero * $i) . "\n";
}

?>
