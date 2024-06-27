<?php

function calcularGorjeta($valorConta, $porcentagemGorjeta) {
    return ($valorConta * $porcentagemGorjeta) / 100;
}

function lerValor($mensagem) {
    echo $mensagem;
    return (float)trim(fgets(STDIN));
}

$valorConta = lerValor("Digite o valor total da conta: R$ ");
$porcentagemGorjeta = lerValor("Digite a porcentagem da gorjeta: ");
$valorGorjeta = calcularGorjeta($valorConta, $porcentagemGorjeta);
$valorTotal = $valorConta + $valorGorjeta;

echo "Valor da conta: R$ " . number_format($valorConta, 2, ',', '.') . "\n";
echo "Porcentagem da gorjeta: " . $porcentagemGorjeta . "%\n";
echo "Valor da gorjeta: R$ " . number_format($valorGorjeta, 2, ',', '.') . "\n";
echo "Valor total a ser pago: R$ " . number_format($valorTotal, 2, ',', '.') . "\n";

?>
