<?php

	$cpf = "11111111111";
	$validador = 0;

		//Todos dígitos iguais

				for ($k = 0; $k < 11; $k++){

					if ((integer)substr($cpf,$k,1) != (integer)substr($cpf,$k+1,1)){
						return false;
					}

				}


		//Primeiro dígito

		$posicao1 = 0;
		$valorSoma = 0;
		$valorTotal = 0;
		$digitoVerificador1 = 0;
		$comparar1 = ((integer)substr($cpf,9,1));

				for ($i = 10; $i > 1; $i--){
					$valorSoma = ((integer)substr($cpf,$posicao1,1)) * $i; 
					$valorTotal += $valorSoma;
					echo "$valorTotal<br>";
					$posicao1++;
				}

		$digitoVerificador1 = ($valorTotal * 10) % 11;

			if($digitoVerificador1 == 10)
				$digitoVerificador1 = 0;

		echo "<br>Primeiro digito: $digitoVerificador1<br><br>";

		//Segundo dígito

		$posicao1 = 0;
		$valorSoma = 0;
		$valorTotal = 0;
		$digitoVerificador2 = 0;
		$comparar2 = ((integer)substr($cpf,10,1));

				for ($s = 11; $s > 1; $s--){
					$valorSoma = ((integer)substr($cpf,$posicao1,1)) * $s; 
					$valorTotal += $valorSoma;
					echo "$valorTotal<br>";
					$posicao1++;
				}

		$digitoVerificador2 = ($valorTotal * 10) % 11;

			if($digitoVerificador2 == 10)
					$digitoVerificador2 = 0;

		echo "<br>Segundo digito: $digitoVerificador2<br><br>";





		//Verificar

		if($comparar1 == $digitoVerificador1 && $comparar2 == $digitoVerificador2)
			echo "True";
		else
			echo "False";
?>