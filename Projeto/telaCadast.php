<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tela Cadastro</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  </head>

  <body>
    <?php
          include("Banco.php");
          $verificacao = new Banco();
          $verificacao->deslogar();
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
            <li class="nav-item">
              <a class="nav-link" href="telaLogin.php">Entrar
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Cadastrar
                <span class="sr-only">(current)</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Notícias</a>
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
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto"> 
        <div class="card card-signin my-5"> 
          <div class="card-body">
            <h5 class="card-title text-center">Cadastrar</h5>
            <form action="ProcessCadastro.php" class="form-signin" method="POST" >

              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" placeholder="Nome" name="NameRegister" required autofocus>
                <label for="inputName"></label>
              </div>
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" name="EmailRegister" required autofocus>
                <label for="inputEmail"></label>
              </div>
              <div class="form-label-group">
                <input type="number" id="inputMatric" class="form-control" placeholder="Matricula" name="MatricRegister"  autofocus>
                <label for="inputMatric"></label>
              </div>
              <div class="form-label-group">
                <input type="number" id="inputCPF" class="form-control" placeholder="CPF" name="CpfRegister" required autofocus>
                <label for="inputCPF"></label>
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="PassRegister" required>
                <label for="inputPassword"></label>
              </div>


	          <hr class="my-2">
	          <h5 class="card-title">Tipo de Usuário:</h5>
              

              <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1" required>
				  <label class="form-check-label" for="exampleRadios1">
				    Coordenação
				  </label>
				</div>
			
				<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
				  <label class="form-check-label" for="exampleRadios2">
				    Professor
				  </label>
			 </div>

			 <div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
				  <label class="form-check-label" for="exampleRadios3">
				    Pai
				  </label>
			</div>

			<div class="form-check">
				  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="4">
				  <label class="form-check-label" for="exampleRadios4">
				    Aluno
				  </label>
			</div>

			 	  <hr class="my-3">

	              <button class="btn btn-lg btn-primary btn-block" type="submit">Finalizar Cadastro</button>

	              <hr class="my-3">

                <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Receber e-mails informativos</label>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
