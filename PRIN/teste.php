<?php

	$Matric = $_POST['MatricRegister'];
	$Name = $_POST['NameRegister'];
	$CPF = $_POST['CpfRegister'];
	$Email = $_POST['EmailRegister'];
	$Senha = $_POST['PassRegister'];

	$con = mysqli_connect('localhost','root','');

	mysqli_select_db($con,'teste');



?>