<?php

function calcularArea($largura, $altura) {
    return $largura * $altura;
}

function calcularPerimetro($largura, $altura) {
    return 2 * ($largura + $altura);
}

function lerValor($mensagem) {
    echo $mensagem;
    return (float)trim(fgets(STDIN));
}

$largura = lerValor("Digite a largura do retângulo (em metros): ");
$altura = lerValor("Digite a altura do retângulo (em metros): ");
$area = calcularArea($largura, $altura);
$perimetro = calcularPerimetro($largura, $altura);

echo "Largura: " . $largura . " metros\n";
echo "Altura: " . $altura . " metros\n";
echo "Área: " . $area . " m²\n";
echo "Perímetro: " . $perimetro . " metros\n";

?>
