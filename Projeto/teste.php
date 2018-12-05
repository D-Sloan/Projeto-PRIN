<?php
	
	

	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS UserLog (Cpf varchar(14) ); ");
	mysqli_close($conn);

	//CRIAÇÃO DA TABELA
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS User (Matricula int(8), Nome varchar(40) not null, Cpf varchar(14) not null,Email varchar(25), Senha varchar(20) ); ");
	mysqli_close($conn);

	//DEFINIÇÃO DA CHAVE PRIMÁRIA
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE User ADD PRIMARY KEY(Cpf) ");
	mysqli_close($conn);

	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE user ADD Tipo int(1) ");
	mysqli_close($conn);





	/*
	
	$Matric = $_POST['MatricRegister'];
	$Name = $_POST['NameRegister'];
	$CPF = $_POST['CpfRegister'];
	$Email = $_POST['EmailRegister'];
	$Senha = $_POST['PassRegister'];
	$tipo = (int) $_POST['exampleRadios'];

	

	$teste->realizarCadastro($Matric, $Name, $CPF, $Email, $Senha, $tipo);
	*/

	/*
	$teste = new Banco();
	$teste->deslogar();
	$teste->logar("12345678912");
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	$resultado = mysqli_query($conn,"SELECT * FROM userLog");
	$registro =  mysqli_fetch_array($resultado);
	$cpf = $registro['Cpf'];
	echo "$cpf";
	*/
?>