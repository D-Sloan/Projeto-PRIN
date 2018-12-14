<?php  

	include("../connection.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();
	$request_method=$_SERVER["REQUEST_METHOD"];

	switch($request_method)
	{
		case 'GET':
			// Buscar uma ID ou Todas
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_alunos2($id);
			}
			else
			{
				get_alunos();
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

	function get_alunos()
	{
		global $connection;
		$query="SELECT * FROM aluno";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	function get_alunos2($id=0)
	{
		global $connection;
		$query="SELECT * FROM aluno";
		if($id != 0)
		{
			$query.=" WHERE id=".$id." LIMIT 1";
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
	

?>