
<?php



class Banco{


	function inserirUser($Matricula, $Name, $Cpf, $Email, $Senha){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"INSERT INTO user (Matricula, Nome, Cpf, Email, Senha, Tipo) VALUES('$Matricula', '$Name', '$Cpf', '$Email', '$Senha', 1)");
		mysqli_close($conn);
		echo "Cheguei até aqui";
	}
	function verificarCadastro($Cpf){

			$conn = mysqli_connect("localhost", "root", "", "prin");
			$Busca = mysqli_query($conn,"SELECT Cpf FROM user WHERE Cpf = '$Cpf'");

			if(mysqli_num_rows($Busca)>0){
				return true;
			}

			else{
				return false;
			}
			
	}

	public function realizarCadastro($Matricula, $Name, $Cpf, $Email, $Senha,$Tipo){

	}

}