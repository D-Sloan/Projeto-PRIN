<?php

	$Matric = $_POST['MatricRegister'];
	$Name = $_POST['NameRegister'];
	$CPF = $_POST['CpfRegister'];
	$Email = $_POST['EmailRegister'];
	$Senha = $_POST['PassRegister'];

	$conn = mysqli_connect("localhost", "root", "", "teste");
	mysqli_query($conn,"CREATE TABLE nomes (nome varchar(50));");
	mysqli_query($conn,"INSERT INTO nomes (nome) VALUES('$Name')");
	mysqli_close($conn);





?>