<?php
include 'func.php';

$quilometragem = 200; // Quilometragem percorrida
$consumoLitros = 10; // Consumo em litros
$precoLitro = 4.4; // Preço do litro de combustível
$resultadosConsumoCusto = calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro);

foreach ($resultadosConsumoCusto as $key => $value) {
    echo $key . ": " . $value . "<br>";
}
?>