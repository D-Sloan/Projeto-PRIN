<?php
	include("Banco.php");
	$Matricula = $_POST['MatricRegister'];
	$Name = $_POST['NameRegister'];
	$Cpf = $_POST['CpfRegister'];
	$Email = $_POST['EmailRegister'];
	$Senha = $_POST['PassRegister'];
	$Tipo = (int) $_POST['exampleRadios'];

	$funcoes = new Banco();
	$funcoes->realizarCadastro($Matricula, $Name, $Cpf, $Email, $Senha,$Tipo);

?>