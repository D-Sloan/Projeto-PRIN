<!DOCTYPE html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tela Cadastro Dependente</title>


    


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/logo-nav.css" rel="stylesheet">

  </head>
  <script type="text/javascript">
      function isNumber(n) {
          return !isNaN(parseFloat(n)) && isFinite(n);
      }
      function validarDados(){
        let cpf = CadastForm.CpfRegisterDependente.value;
        let matric = CadastForm.MatricRegisterDependente.value;
        matric = matric.replace("-","");
        if(!isNumber(matric)){
          alert("somente números no campo de matricula");
          CadastForm.MatricRegisterDependente.focus();
          return false;
        }
        if(cpf.length != 14){
          alert ("CPF deve conter exatamente os 11 dígitos");
          CadastForm.CpfRegisterDependente.focus();
          return false;
          
        }
        cpf = cpf.replace(".","");
        cpf = cpf.replace("-","");
        if(!isNumber(cpf)){
          alert ("CPF deve conter apenas números");
          CadastForm.CpfRegisterDependente.focus();
          return false;
        }
        if(CadastForm.exampleRadios.value == 1){
          alert ("Desculpe não estamos cadastrando coordenadores!!");
          return false;
        }
        if (CadastForm.exampleRadios.value == 4 && CadastForm.MatricRegisterDependente.value.length < 9){
          alert ("Matricula deve seguir o formato de 8 dígitos!!");
          CadastForm.MatricRegisterDependente.focus();
          return false;
        }
        if(CadastForm.PassRegister.value.length < 8){
          alert ("Senha deve conter no mínimo 8 caracteres!!");
          CadastForm.PassRegister.focus();
          return false;
        }
        var regex = /^(?=(?:.*?[a-z]){3})(?=(?:.*?[0-9]){3})/;
        var senha = CadastForm.PassRegister.value;
        if(!regex.exec(senha)){
          alert("A senha deve conter no mínimo 3 letras e 3 números");
          CadastForm.PassRegister.focus();
          return false;
        }
        
        return true;
      }
      function mascarar(){
        var cpf = CadastForm.CpfRegisterDependente.value;
        if(cpf.length==3){
          CadastForm.CpfRegisterDependente.value = cpf+".";
        }
        else if(cpf.length==7){
          CadastForm.CpfRegisterDependente.value = cpf+".";
        }
        else if(cpf.length==11){
          CadastForm.CpfRegisterDependente.value = cpf+"-";
        }
        var matric = CadastForm.MatricRegisterDependente.value;
        if(matric.length == 4){
          CadastForm.MatricRegister.value = CadastForm.MatricRegisterDependente.value+"-";
        }
      }
    </script>

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
            <li class="nav-item">
              <a class="nav-link" href="telaLogin.php">Entrar
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Cadastrar
                <span class="sr-only">(current)</span>
              </a>
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
            <h5 class="card-title text-center">Cadastrar Dependente</h5>
            <form name = "CadastForm" action ="ProcessCadastro.php" onsubmit="return validarDados()"  class="form-signin" method="POST" >

              <div class="form-label-group">
                <input type="text" id="inputMatric" onkeypress="mascarar()"  maxlength="9" class="form-control" placeholder="Matricula" name="MatricRegisterDependente"  autofocus>
                <label for="inputMatric"></label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputCPF" onkeypress="mascarar()" maxlength="14"  class="form-control" placeholder="CPF" name="CpfRegisterDependente" required autofocus>
                <label for="inputCPF"></label>
              </div>

              
          <hr class="my-3">

                <button class="btn btn-lg btn-primary btn-block" type="submit"">Finalizar Cadastro</button>
                <hr class="my-3">

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