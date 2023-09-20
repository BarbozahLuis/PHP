<?php
function calcularFatorial($n) {
    if ($n < 0) {
        return "Fatorial não definido para números negativos.";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}
?>