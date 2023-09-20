<?php
function calcularConsumoCusto($quilometragem, $consumoLitros, $precoLitro) {
    $consumoMedio = $quilometragem / $consumoLitros;
    $custoPorQuilometro = $precoLitro / $consumoMedio;
    
    $resultados = array(
        "Consumo Médio (km/l)" => $consumoMedio,
        "Custo por Quilômetro" => $custoPorQuilometro
    );
    
    return $resultados;
}
?>