<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tela Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  </head>

  <script type="text/javascript">
      
    function tipo(){

      if(loginForm.exampleRadios.value == 4 || loginForm.exampleRadios.value == 2){
        loginForm.CpfLogin.placeholder="Matrícula";
      }
      else if(loginForm.exampleRadios.value == 1 ){
         loginForm.CpfLogin.placeholder="Codigo De Segurança";
      }
      else{
         loginForm.CpfLogin.placeholder="CPF";
      }
      
    }

  </script>>

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
            <form class="form-signin" name="loginForm" method="POST" action="ProcessLogin.php">
              <div class="form-label-group">
                <input type="text" id="inputCpf" class="form-control" placeholder="CPF" name="CpfLogin" required autofocus>
                <label for="inputCpf"></label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="SenhaLogin" required>
                <label for="inputPassword"></label>
              </div>

              <hr class="my-2">
            <h5 class="card-title">Tipo de Usuário:</h5>
              

              <div class="form-check">
          <input class="form-check-input" type="radio" onclick="tipo()" name="exampleRadios" id="exampleRadios1" value="1" required>
          <label class="form-check-label" for="exampleRadios1">
            Coordenação
          </label>
        </div>
      
        <div class="form-check">
          <input class="form-check-input" type="radio" onclick="tipo()" name="exampleRadios" id="exampleRadios2" value="2">
          <label class="form-check-label" for="exampleRadios2">
            Professor
          </label>
       </div>

       <div class="form-check">
          <input class="form-check-input" type="radio" onclick="tipo()" name="exampleRadios" id="exampleRadios3" value="3">
          <label class="form-check-label" for="exampleRadios3">
            Pai
          </label>
      </div>

      <div class="form-check">
          <input class="form-check-input" type="radio" onclick="tipo()" name="exampleRadios" id="exampleRadios4" value="4">
          <label class="form-check-label" for="exampleRadios4">
            Aluno
          </label>
      </div>

          <hr class="my-3">

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
