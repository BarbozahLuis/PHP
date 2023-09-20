<?php
function verificarTriangulo($a, $b, $c) {
    if ($a < ($b + $c) && $b < ($a + $c) && $c < ($a + $b)) {
        return "Os lados formam um triângulo.";
    } else {
        return "Os lados não formam um triângulo.";
    }
}
?>