	<!DOCTYPE html>
	<html lang="pt-br">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tela Inserir Notas</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/logo-nav.css" rel="stylesheet">

	  </head>


	  <body>
	  	<?php
	  		include("Banco.php");
      		$verificacao = new Banco();
      		$verificacao->verificarLogin();
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

			  <h4 class="my-4">Logado como: <br><?php
			  $banco = new Banco();
			  $banco->verificarTipo();
			  ?></h4>
			  <div class="list-group">
				<a href="telaMenuProf.php" class="list-group-item">Menu</a>
				<a href="telaChat.php" class="list-group-item">Chat</a>
				<a href="telaInsAtiv.pp" class="list-group-item">Criar Nova Atividade</a>
				<a href="#" class="list-group-item">Lista de Presença</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">

				<br>
				<h2><strong><center>Inserção de Notas</center></strong></h2>

				<div id="areaNota">
					<form action="" method="POST">
						<br>
						<p>&nbsp;&nbsp;&nbsp;•Turma:<select name="turma">
							<option>123</option>
							<option>321</option>
						</select></p>

						<table class="table">
				<thead>
					<tr>
					  <th scope="col">Matricula</th>
					  <th scope="col">Nome</th>
					  <th scope="col">1B</th>
					  <th scope="col">2B</th>
					  <th scope="col">R1</th>
					  <th scope="col">3B</th>
					  <th scope="col">4B</th>
					  <th scope="col">R2</th>
					  <th scope="col">Média Final</th>
					</tr>
					
				</thead>

				<tbody>

					<tr>
					  <td>123456</td>
					  <td>Joel</td>
					  <td><input type="text" name="notaB1" size="1"></td>
					  <td><input type="text" name="notaB2" size="1"></td>
					  <td><input type="text" name="notaR1" size="1"></td>
					  <td><input type="text" name="notaB3" size="1"></td>
					  <td><input type="text" name="notaB4" size="1"></td>
					  <td><input type="text" name="notaR2" size="1"></td>
					  <td>---</td>
					</tr>

					<tr>
					  <td>654321</td>
					  <td>Doug</td>
					  <td><input type="text" name="notaB1" size="1"></td>
					  <td><input type="text" name="notaB2" size="1"></td>
					  <td><input type="text" name="notaR1" size="1"></td>
					  <td><input type="text" name="notaB3" size="1"></td>
					  <td><input type="text" name="notaB4" size="1"></td>
					  <td><input type="text" name="notaR2" size="1"></td>
					  <td>---</td>
					</tr>

				</tbody>

				</table>

						<p><center><input type="submit" value="Inserir Notas"></p></center>
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
