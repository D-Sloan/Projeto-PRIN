
<?php


class Banco{


	protected function inserirUser($Matricula, $Name, $Cpf, $Email, $Senha, $Tipo){
		$resultado = substr_replace($Cpf, '.', 3, 0);
		$resultado = substr_replace($resultado, '.', 7, 0);
		$resultado = substr_replace($resultado, '-', 11, 0);
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"INSERT INTO user (Matricula, Nome, Cpf, Email, Senha, Tipo) VALUES('$Matricula', '$Name', '$resultado', '$Email', '$Senha', '$Tipo')");
		$this->logar($resultado);
		mysqli_close($conn);
	}

	protected function verificarCadastro($Cpf,$Email){
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

				if ($Tipo == 1){
					?>
					<script>
    					alert("Desculpe, ainda não cadastramos coordenadores");
    					location = "telaCadast.php";
						</script>
					<?php
				}

				$this->inserirUser($Matricula, $Name, $Cpf, $Email, $Senha,$Tipo)

				

				?>
				<script>
    			alert("Cadastro realizado com sucesso");
    			location = "telaLogin.php";
				</script>
				<?php
			}
	}

	protected function logar($Cpf){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"INSERT INTO userLog (Cpf) VALUES('$Cpf')");
		mysqli_close($conn);
	}

	public function deslogar(){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		mysqli_query($conn ,"DELETE FROM userLog ;");
		mysqli_close($conn);
	}

	public function verificarLogin(){
		$conn = mysqli_connect("localhost", "root", "", "prin");
		$Busca = mysqli_query($conn,"SELECT * FROM userLog");


		if(mysqli_num_rows($Busca)==0){

			?>
				<script>
    			alert("Por Favor, Realize Login!");
    			location = "telaLogin.php";
				</script>
			<?php

		}
	}

	protected function validarDados($Cpf,$Senha){
		$resultado = substr_replace($Cpf, '.', 3, 0);
		$resultado = substr_replace($resultado, '.', 7, 0);
		$resultado = substr_replace($resultado, '-', 11, 0);
		$conn = mysqli_connect("localhost", "root", "", "PRIN");
		$resultado = mysqli_query($conn,"SELECT Cpf, Senha FROM user WHERE Cpf = '$resultado' AND Senha = '$Senha'");
		if(mysqli_num_rows($resultado)==0){
			return false;
		}
		else{
			return true;
		}
	}

	public function realizarLogin($Cpf,$Senha){
		if($this->validarDados($Cpf,$Senha)){
			$resultado = substr_replace($Cpf, '.', 3, 0);
			$resultado = substr_replace($resultado, '.', 7, 0);
			$resultado = substr_replace($resultado, '-', 11, 0);



			$this->logar($resultado);
			$conn = mysqli_connect("localhost", "root", "", "PRIN");
			$resultado = mysqli_query($conn,"SELECT * FROM userLog");
			$registro =  mysqli_fetch_array($resultado);
			$cpf = $registro['Cpf'];

			$resultado = mysqli_query($conn,"SELECT Tipo FROM user WHERE Cpf = '$cpf'");
			$registro =  mysqli_fetch_array($resultado);
			$Tipo = $registro['Tipo'];

			if($Tipo == 2){
				?>
					<script>
    				alert("Logado Com Sucesso");
    				location = "telaMenuProf.php";
					</script>
				<?php
			}
			else if($Tipo == 3){
				?>
					<script>
    				alert("Logado Com Sucesso");
    				location = "telaMenuResp.php";
					</script>
				<?php
			}
			if($Tipo == 4){
				?>
					<script>
    				alert("Logado Com Sucesso");
    				location = "telaMenuAluno.php";
					</script>
				<?php
			}

			
		}
		else{
			?>
				<script>
    			alert("CPF ou Senha inválida!");
    			location = "telaLogin.php";
				</script>
			<?php
		}
	}

	public function verificarTipo(){
		$conn = mysqli_connect("localhost", "root", "", "PRIN");
		$resultado = mysqli_query($conn,"SELECT * FROM userLog");
		$registro =  mysqli_fetch_array($resultado);
		$cpf = $registro['Cpf'];

		$resultado = mysqli_query($conn,"SELECT Tipo FROM user WHERE Cpf = '$cpf'");
		$registro =  mysqli_fetch_array($resultado);
		$Tipo = $registro['Tipo'];

		$resultado = mysqli_query($conn,"SELECT Nome FROM user WHERE Cpf = '$cpf'");
		$registro =  mysqli_fetch_array($resultado);
		$Nome = $registro['Nome'];


		if($Tipo == 1){
			echo "Coordenador <br><br>Nome: $Nome";
		}
		else if($Tipo == 2){
			echo "Professor <br><br>Nome: $Nome";
		}
		else if($Tipo == 3){
			echo "Responsável <br><br>Nome: $Nome";
		}
		else if($Tipo == 4){
			echo "Aluno <br><br>Nome: $Nome";
		}
	}

}