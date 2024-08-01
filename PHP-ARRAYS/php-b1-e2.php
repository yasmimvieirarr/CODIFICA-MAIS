<?php

function imprimirTabelaMultiplicacao($numero) {
    echo "Tabela de multiplicação do número $numero:\n";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
}

$numero = readline("Digite um número para a tabela de multiplicação: ");
imprimirTabelaMultiplicacao($numero);

?>
