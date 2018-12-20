<?php
	

	//CRIAÇÃO DE TABELAS

	$conn = mysqli_connect("localhost", "root", "", "PRIN");

	mysqli_query($conn, "CREATE TABLE IF NOT EXISTS T_Resp(Cpf varchar(14) PRIMARY KEY, Nome varchar(30) not null, Email varchar(30) not null, Senha varchar(20) not null);");	

	mysqli_query($conn, "CREATE TABLE IF NOT EXISTS T_Turma(TurmaCod varchar(3) PRIMARY KEY);");


	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS T_Horario(HorarioCod varchar(2) PRIMARY KEY, DiaSemana varchar(15) not null, Hora varchar(5) not null);");


	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS T_Aluno(Matric int(8) PRIMARY KEY, Nome varchar(30) not null, Email varchar(30) not null,Cpf varchar(14) not null, Senha varchar(20) not null, TurmaCod varchar(3), CpfResp varchar(14), CONSTRAINT fk_AlResp FOREIGN KEY(CpfResp) REFERENCES T_Resp(Cpf), CONSTRAINT fk_AlTurm FOREIGN KEY (TurmaCod) REFERENCES T_Turma (TurmaCod));");



	mysqli_query($conn, "CREATE TABLE IF NOT EXISTS T_Professor(MatricProf int(8) PRIMARY KEY, Nome varchar(30) not null, Email varchar(30) not null, Cpf varchar(14) not null, Senha varchar(20) not null);");

	mysqli_query($conn, "CREATE TABLE IF NOT EXISTS T_Materia(MateriaCod varchar(3) PRIMARY KEY, Nome varchar(15) not null, TurmaCod varchar(3), MatricProf int(8) not null, HorarioCod varchar(2) not null, CONSTRAINT fk_MatTurm FOREIGN KEY (TurmaCod) REFERENCES T_Turma (TurmaCod), CONSTRAINT fk_MatProf FOREIGN KEY (MatricProf) REFERENCES T_Professor (MatricProf), CONSTRAINT fk_MatHor FOREIGN KEY (HorarioCod) REFERENCES T_Horario (HorarioCod));");

	// Eroo em alguma linha que eu não sei
	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS T_Freq(MatricAluno int(8), MateriaCod varchar(3), Data varchar(10) not null, Presenca boolean not null,PRIMARY KEY (MatricAluno, MateriaCod), CONSTRAINT fk_FreqAl FOREIGN KEY (MatricAluno) REFERENCES T_Aluno(Matric), CONSTRAINT fk_FreqMat FOREIGN KEY(MateriaCod) REFERENCES T_Materia(MateriaCod) );");

	mysqli_query($conn,"CREATE TABLE IF NOT EXISTS T_Matrics (MatricUser int(8) PRIMARY KEY, Tipo int(1) not null)");

	mysqli_close($conn);





















	/*
	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE User ADD PRIMARY KEY(Cpf) ");
	mysqli_close($conn);

	$conn = mysqli_connect("localhost", "root", "", "PRIN");
	mysqli_query($conn,"ALTER TABLE user ADD Tipo int(1) ");
	mysqli_close($conn);

	*/



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