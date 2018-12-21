	<!DOCTYPE html>
	<html lang="pt-br">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tela Atividade Dependente</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/logo-nav.css" rel="stylesheet">
		<link href="css/chat.css" rel="stylesheet">


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
				<a href="telaChat.php" class="list-group-item">Chat</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br><br>
				

				<div id="box-toggle" class="boxmodel">
					<h2><center>Atividades do Dependente</center></h2>
					<h3>Matéria: </h3>
					<div>
						<p>Data: 18/06</h2>
						<p>Trabalho de barroco</p>
					</div>

					<h3><br>Matéria: Matemática</h3>
					<div>
						<p>Data: 21/05</p>
						<p>Prova Bimestral - Conteúdos: Logaritmo e Matriz</p>
					</div>


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
