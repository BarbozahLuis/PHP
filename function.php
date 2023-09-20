
<?php
	/*function multiplica($a, $b, $c){
		$retorno = ($a * $b * $c);

		return $retorno;
	}
	echo multiplica(3,5,4);*/

	/*$x = 5;

	echo $x;

	if($x <= 5):
		header('Location: https://www.google.com.br/');

	else:
		header('Location: erro.php');
	endif;*/

	function media( $a, $b, $c, $d){


		$retorno =($a + $b + $c +$d)/4 ;

	if ($retorno>=6) {
		echo "Você foi aprovado", $retorno;
	}
	elseif($retorno<5){
		echo "Você esta de reprovado", $retorno;
	}
	else{
		echo "Você ficou de exame", $retorno;
	}			
	}
	echo media (9,5,5,6);


	

	














?>