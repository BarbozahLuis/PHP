<?php
include "operacoes.php"; 
$num1 = 10;
$num2 = 12;

echo "<h1> Operações Matemáticas</h1>";
echo "<h3> Números Digitados: </h3>";
echo "<h4>Número 1: ". $num1 . "</h4>";
echo "<h4>Número 2: " . $num2 . "</h4>";

echo "<h2>Resultados: </h2>";
echo "<h4>Resultado da Soma é :". Adicao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Subtração é : " . Subtracao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Multiplicação é : ". Multiplicao($num1, $num2) . "</h4>";
echo "<h4>Resultado da Divisão é : " . Divisao($num1, $num2) . "</h4>";
?>