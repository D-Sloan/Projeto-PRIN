<?php  

	include("../connection.php");
	$db = new dbObj();
	$connection =  $db->getConnstring();
	$request_method=$_SERVER["REQUEST_METHOD"];

	switch($request_method)
	{
		case 'GET':
			// Retrive Products
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				get_employees2($id);
			}
			else
			{
				get_employees();
			}
			break;

		case 'POST':
		// Insert Product
		insert_employee();
		break;

		case 'PUT':
		// Update Product
		$id=intval($_GET["id"]);
		update_employee($id);
		break;

		case 'DELETE':
		// Delete Product
		$id=intval($_GET["id"]);
		delete_employee($id);
		break;

		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}

	function get_employees()
	{
		global $connection;
		$query="SELECT * FROM employee";
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	function get_employees2($id=0)
	{
		global $connection;
		$query="SELECT * FROM employee";
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

	function insert_employee()
	{
		global $connection;
 
		$data = json_decode(file_get_contents('php://input'), true);
		$employee_name=$_POST["employee_name"];
		$employee_salary=$_POST["employee_salary"];
		$employee_age=$_POST["employee_age"];
		$query="INSERT INTO employee (employee_name, employee_salary, employee_age) VALUES('$employee_name', '$employee_salary', '$employee_age')";

		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Employee Added Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Employee Addition Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}

	function delete_employee($id)
	{
		global $connection;
		$query="DELETE FROM employee WHERE id=".$id;
		if(mysqli_query($connection, $query))
		{
			$response=array(
				'status' => 1,
				'status_message' =>'Employee Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'status_message' =>'Employee Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response,JSON_PRETTY_PRINT);
	}
	

?>