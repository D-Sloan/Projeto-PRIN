<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Listar</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
   </head>
   <body>
      <?php  
         include("connection.php");
      ?>

      <nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container-fluid">
         <div class="navbar-header">
         <a class="navbar-brand" href="#">Api</a>
      </nav>

      <div id="main" class="container-fluid">

         <h3 class="page-header">Adicionar Item</h3>
         <form action="/apirestBeta/v1/alunos.php" method="POST">
            <div class="row">

               <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Nome</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome" name="aluno_nome">
               </div>

               <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Matrícula</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Digite a matrícula" name="aluno_matric">
               </div>

               <div class="form-group col-md-4">
                  <label for="exampleInputEmail1">Idade</label>
                  <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Digite a idade" name="aluno_idade">
               </div>

            </div>
            <hr />

            <div class="row">
               <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                  <a href="index.php" class="btn btn-default">Cancelar</a>
               </div>
            </div>

         </form>

      </div>
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>