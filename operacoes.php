<?php
function Adicao($num1, $num2){
	return $num1 + $num2;
}
function Subtracao($num1, $num2){
	return $num1 - $num2;
}
function Multiplicao($num1, $num2){
	return $num1 * $num2;
}
function Divisao($num1, $num2){
	if($num2 != 0){
	return $num1 / $num2;
}else{
	return "Divisão por zero não é possível !! ";	
	}	
}


?>