	<!DOCTYPE html>
	<html lang="pt-br">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Tela Boletim Aluno</title>

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
			 Patati & Patatá
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
				<a href="telaMenuAluno.php" class="list-group-item">Menu</a>
				<a href="telaChat.php" class="list-group-item">Chat</a>
				<a href="telaAtividadeAluno.php" class="list-group-item">Atividades</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">


				<div>
					<br><br>
				  <table class="table table-dark">
				<thead>
				  	<tr>
				  		<th colspan="8"><big><center>Boletim</center></big></th>
				  	</tr>
					<tr>
					  <th scope="col">Matéria</th>
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
					  <td>Português</td>
					  <td>8</td>
					  <td>6</td>
					  <td>----</td>
					  <td>7</td>
					  <td>4,5</td>
					  <td>8,5</td>
					  <td>7,4</td>
					</tr>

					<tr>
					  <td>Matemática</td>
					  <td>10</td>
					  <td>9</td>
					  <td>----</td>
					  <td>8</td>
					  <td>7</td>
					  <td>----</td>
					  <td>8,5</td>
					</tr>

				</tbody>

				</table>

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
