<?php
	include("Banco.php");
	$Matric = $_POST['MatricRegister'];
	$Name = $_POST['NameRegister'];
	$CPF = $_POST['CpfRegister'];
	$Email = $_POST['EmailRegister'];
	$Senha = $_POST['PassRegister'];
	$tipo = (int) $_POST['exampleRadios'];

	


	



	/*
	CRIAÇÃO DA TABELA
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS User (Matricula int(8), Nome varchar(40) not null, Cpf varchar(14) not null,Email varchar(25), Senha varchar(20) ); ");
	mysqli_close($conn);
	*/

	/*
	DEFINIÇÃO DA CHAVE PRIMÁRIA
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE User ADD PRIMARY KEY(Cpf) ");
	mysqli_close($conn);
	*/

	/*
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE user ADD Tipo int(1) ");
	mysqli_close($conn);
	*/

?>