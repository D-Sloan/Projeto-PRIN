<?php  

	include("../connection.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();
	$request_method=$_SERVER["REQUEST_METHOD"];

	switch($request_method)
	{
		case 'GET':
			// Buscar uma ID ou Todas
			if(!empty($_GET["table"]) && !empty($_GET["id"]))
			{
				$table=($_GET["table"]);
				$id=intval($_GET["id"]);
				get_alunos2($table, $id);
			}
			else
			{
				$table=($_GET["table"]);
				get_alunos($table);
			}
			break;

		case 'POST':
		// Insert Product
		insert_aluno();
		break;

		case 'PUT':
		// Update Product
		$id=intval($_GET["id"]);
		update_aluno($id);
		break;

		case 'DELETE':
		// Delete Product
		$id=intval($_GET["id"]);
		delete_aluno($id);
		break;

		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

	function get_alunos($table)
	{
		global $connection;
		$query="SELECT * FROM .$table";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		//print_r($response);

		for($i=0; $i<count($response); $i++){

			echo "\n";
			

			for($j=0; $j<4; $j++){

				if($j==0)
					echo "ID: ";

				if($j==1)
					echo "Nome: ";

				if($j==2)
					echo "Matrícula: ";

				if($j==3)
					echo "Idade: ";

				echo $response[$i][$j] . "\n";


			}

		}
		
	}

	function get_alunos2($table, $id)
	{
		global $connection;
		$query="SELECT * FROM .$table";
		if($id != 0)
		{
			$query.=" WHERE id=".$id."";
		}
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);


	}

	function insert_aluno()
	{
		global $connection;
 
		$data = json_decode(file_get_contents('php://input'), true);
		$aluno_nome=$_POST["aluno_nome"];
		$aluno_matric=$_POST["aluno_matric"];
		$aluno_idade=$_POST["aluno_idade"];
		$query="INSERT INTO aluno (aluno_nome, aluno_matric, aluno_idade) VALUES('$aluno_nome', '$aluno_matric', '$aluno_idade')";

		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Aluno adicionado com sucesso.'
			);

			header('Location: http://127.0.0.1/ApirestBeta/index.php');
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Aluno não foi adicionado com sucesso.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	function delete_aluno($id)
	{
		global $connection;
		$query="DELETE FROM aluno WHERE id=".$id;
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Aluno deletado com sucesso.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Aluno não foi deletado com sucesso.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	function update_aluno($id)
	{
		global $connection;
		$post_vars = json_decode(file_get_contents("php://input"),true);
		$aluno_nome=$post_vars["aluno_nome"];
		$aluno_matric=$post_vars["aluno_matric"];
		$aluno_idade=$post_vars["aluno_idade"];

		$query="UPDATE aluno SET aluno_name='".$aluno_name."', aluno_salary='".$aluno_salary."', aluno_age='".$aluno_age."' WHERE id=".$id;
		
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Aluno atualizado com sucesso.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Aluno não foi atualizado com sucesso.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
	

?>