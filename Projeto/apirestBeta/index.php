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

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Alunos</h2>

		</div>
		<div class="col-sm-6">
			<form action="/apirestBeta/v1/alunos.php" method="GET">
			<div class="input-group h2">
				<input name="id" class="form-control" id="search" type="text" placeholder="Pesquisar por Id">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>


		</div>


			

		<div class="col-sm-3">
			<a href="delete.php" class="btn btn-primary pull-right h2">Deletar Aluno</a>
			<a href="add.php" class="btn btn-primary pull-right h2">Novo Aluno</a>
			
		</div>



	</div> <!-- /#top -->
 
 	<hr />

 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Matricula</th>
					<th>Idade</th>
				</tr>
			</thead>
			<tbody>

		<?php 

		$db = new dbObj();
		$connection =  $db->getConnstring();
		$query="SELECT * FROM aluno";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}

		for($i=0; $i<count($response); $i++){

		
			echo "<tr>";
			

			for($j=0; $j<4; $j++){

				echo "<td>";
				echo $response[$i][$j];
				echo "</td>";
				
				
			}

			echo "</tr>";
			

		}

 	?>
			</tbody>
		</table>
	</div>
	
	</div> <!-- /#list -->
	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>