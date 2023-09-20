<?php
function multiplicacaoPorSomasSucessivas($a, $b) {
    $resultado = 0;
    $i = 0;
    
    while ($i < $b) {
        $resultado += $a;
        $i++;
    }
    
    return $resultado;
}
?>