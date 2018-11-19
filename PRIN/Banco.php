<?php



class Banco{


	function inserirUser($Matricula,$Name,$Cpf,$Email,$Senha){
		$conn = mysqli_connect("localhost", "root", "", "teste");
		mysqli_query($conn ,"INSERT INTO nomes (nome) VALUES('joelzinho inho')");
		mysqli_close($conn);
		echo "Cheguei até aqui";
	}

}