	<!DOCTYPE html>
	<html lang="pt-br">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tela Chat</title>

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
				<a href="telaMenuAluno.php" class="list-group-item">Menu</a>
				<a href="telaBoletimAluno" class="list-group-item">Boletim</a>
				<a href="telaAtividadeAluno.php" class="list-group-item">Atividades</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">
				<br><br>
				<h2><center>Chat</center></h2>
				 <div class="chat">
  					<p>Hello. How are you today?</p>
  					<span class="time-right">11:00</span>
				</div>

				<div class="chat darker">
  					<p>Hey! I'm fine. Thanks for asking!</p>
  					<span class="time-left">11:01</span>
				</div>

				<div class="chat">
  					<p>Sweet! So, what do you wanna do today?</p>
  					<span class="time-right">11:02</span>
				</div>

				<div class="chat darker">
  					<p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  					<span class="time-left">11:05</span>
				</div>

				<form action="" method="POST">
						Digite:<p><textarea name="chat" rows="2" cols="30"></textarea>  <input type="submit" value="Enviar"></p>
				</form> 

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
