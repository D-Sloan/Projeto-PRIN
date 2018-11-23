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
              <a class="nav-link" href="#">Entrar
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="telaCadast.php">Cadastrar</a>
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
            <h5 class="card-title text-center">Entrar</h5>
            <form class="form-signin">
              <div class="form-label-group">
                <input type="email" id="inputMatric" class="form-control" placeholder="CPF" required autofocus>
                <label for="inputMatric"></label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                <label for="inputPassword"></label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Não me esqueça</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
              <hr class="my-4">
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
