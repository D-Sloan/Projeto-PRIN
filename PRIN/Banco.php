
<?php



class Banco{


	function inserirUser($Matricula, $Name, $Cpf, $Email, $Senha, $Tipo){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"INSERT INTO user (Matricula, Nome, Cpf, Email, Senha, Tipo) VALUES('$Matricula', '$Name', '$Cpf', '$Email', '$Senha', '$Tipo')");
		mysqli_close($conn);
	}


	function verificarCadastro($Cpf,$Email){
			$contador = 0;
			$conn = mysqli_connect("localhost", "root", "", "prin");
			$Busca = mysqli_query($conn,"SELECT Cpf FROM user WHERE Cpf = '$Cpf'");


			if(mysqli_num_rows($Busca)>0){
				$contador++;
			}

			$Busca = mysqli_query($conn,"SELECT Email FROM user WHERE Email = '$Email'");

			if(mysqli_num_rows($Busca)>0){
				$contador+=2;
			}
			if(strlen($Cpf) > 11 ||  strlen($Cpf) < 11){
				$contador+=10;
			}

			return $contador;
			
	}

	public function realizarCadastro($Matricula, $Name, $Cpf, $Email, $Senha,$Tipo){
			if($Tipo == 4 && $Matricula == Null){

				?>
				<script>
    			alert("Por favor, informe a matriicula!");
    			location = "telaCadast.php";
				</script>
				<?php
				
			}
			$Verificacao = $this->verificarCadastro($Cpf, $Email);
			if($verificacao >10){
				$verificacao -=10;
			}
			if($Verificacao == 1){
				?>
				<script>
    			alert("Este CPF Já foi Cadastrado!");
    			location = "telaCadast.php";
				</script>
				<?php
			}
			else if($Verificacao == 2){
				?>
				<script>
    			alert("Este Email já foi cadastrado!");
    			location = "telaCadast.php";
				</script>
				<?php
			}
			else if($Verificacao == 3){
				?>
				<script>
    			alert("Este CPF e Este Email Já foram cadastrado");
    			location = "telaCadast.php";
				</script>
				<?php
			}
			else if($Verificacao == 10){
				?>
				<script>
    			alert("CPF inválido!");
    			location = "telaCadast.php";
				</script>
				<?php
			}
			else{

				$this->inserirUser($Matricula, $Name, $Cpf, $Email, $Senha,$Tipo)

				?>
				<script>
    			alert("Cadastro realizado com sucesso");
    			location = "telaLogin.php";
				</script>
				<?php
			}

	}

}