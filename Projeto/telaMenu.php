	<!DOCTYPE html>
	<html lang="en">

	  <head>
	  	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Logo Nav - Start Bootstrap Template</title>

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
			 Boletim-Online
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
				<a href="#" class="list-group-item">Boletim</a>
				<a href="#" class="list-group-item">Chat</a>
				<a href="#" class="list-group-item">Enviar Atividade</a>
			  </div>

			</div>
			<!-- /.col-lg-3 -->

			<div class="col-lg-9">

			  <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
				<ol class="carousel-indicators">
				  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
				  <div class="carousel-item active">
					<img class="d-block img-fluid" src="images/news1.png" alt="First slide">
				  </div>
				  <div class="carousel-item">
					<img class="d-block img-fluid" src="images/news2.jpg" alt="Second slide">
				  </div>
				  <div class="carousel-item">
					<img class="d-block img-fluid" src="images/news3.jpg" alt="Third slide">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Next</span>
				</a>
				
			 </div>

				<div>
				  <table class="table table-dark">
				  <thead>
					<tr>
					  <th scope="col">Código</th>
					  <th scope="col">Matéria</th>
					  <th scope="col">Dia</th>
					  <th scope="col">Horário</th>
					</tr>
					
				  </thead>
				  <tbody>

					<tr>
					  <th scope="row">1</th>
					  <td>Português</td>
					  <td>Segunda</td>
					  <td>13:00</td>
					</tr>
					<tr>
					  <th scope="row">2</th>
					  <td>Matemática</td>
					  <td>Segunda</td>
					  <td>14:40</td>
					</tr>
					<tr>
					  <th scope="row">3</th>
					  <td>Matemática</td>
					  <td>Segunda</td>
					  <td>16:40</td>
					</tr>
				
					<tr>
					  <th scope="row">4</th>
					  <td>Química</td>
					  <td>Terça</td>
					  <td>13:00</td>
					</tr>
					<tr>
					  <th scope="row">5</th>
					  <td>Física</td>
					  <td>Terça</td>
					  <td>14:40</td>
					</tr>
					<tr>
					  <th scope="row">6</th>
					  <td>Biologia</td>
					  <td>Terça</td>
					  <td>16:40</td>
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
