<?php
	include("Banco.php");
	$Cpf = $_POST['CpfLogin'];
	$Senha = $_POST['SenhaLogin'];


	$funcoes = new Banco();
	$funcoes->realizarLogin($Cpf,$Senha);

?>