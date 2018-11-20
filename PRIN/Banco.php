<?php



class Banco{


	function inserirUser($Matricula, $Name, $Cpf, $Email, $Senha){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"INSERT INTO nomes (Matricula, Nome, Cpf, Email, Senha) VALUES('$Matricula', '$Name', '$Cpf', '$Email', '$Senha')");
		mysqli_close($conn);
		echo "Cheguei até aqui";
	}
	function verificarCadastro(){
		
	}

}