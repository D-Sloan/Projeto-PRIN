	<!DOCTYPE html>
	<html lang="pt-br">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tela Inserir Atividade</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/logo-nav.css" rel="stylesheet">

	  </head>


	  <body>
	  	<?php
	  		/*
	  		include("Banco.php");
      		$verificacao = new Banco();
      		$verificacao->verificarLogin();
      		*/
   		 ?>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
		  <div class="container">
			<a class="navbar-brand" href="#">
			 Patatí & Patatá
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
			  <ul class="navbar-nav ml-auto">

				<li class="nav-item active">
				  <a class="nav-link" href="#">Menu</a>
				  <span class="sr-only">(current)</span>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Contatos</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>

		<!-- Page Content -->
		<div class="container">

		  <div class="row">

			<div class="col-lg-3">

			  <h4 class="my-4">Logado como: <br><?php /*
			  $banco = new Banco();
			  $banco->verificarTipo();
				*/
			  ?></h4>
			  <div class="list-group">
				<a href="telaMenuAluno.php" class="list-group-item">Menu</a>
				<a href="telaBoletimAluno" class="list-group-item">Boletim</a>
				<a href="telaAtividadeAluno.php" class="list-group-item">Atividades</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">

				<br>
				<h2><strong><center>Inserção de Atividade</center></strong></h2>

				<div id="areaAtiv">
					<form id="formAtiv" action="" method="POST">
						<p> •Turma:<select name="turma">
							<option>123</option>
							<option>321</option>
						</select></p>

						<p>•Título: <input type="text" name="titulo"></p>
						 •Descrição: <p><textarea name="descricao" rows="2" cols="24"></textarea></p>
						<label>
							 •Arquivo:
						</label>
						<input type="file" name="anexo" size="60">

						<p><input type="submit" value="Registrar Atividade"></p>
					</form>
				</div>

			</div>
			<!-- /.col-lg-9 -->
		
		  </div>
		  <!-- /.row -->
			  
		</div>
		<!-- /.container -->
		
		
		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	  </body>

	</html>
