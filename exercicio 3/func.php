<?php
function divisaoPorSubtracoesSucessivas($maior, $menor) {
    $resultado = 0;
    
    while ($maior >= $menor) {
        $maior -= $menor;
        $resultado++;
    }
    
    return $resultado;
}
?>