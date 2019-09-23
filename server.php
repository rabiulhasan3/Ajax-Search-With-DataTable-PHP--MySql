<?php 
  header("Content-Type: application/json", true);
	include 'database_connection.php';

	if($_POST['student_name']){
		$student_name = $_POST['student_name'];
		$query = mysqli_query($conn, "SELECT * FROM result WHERE id=$student_name ");

		$result = mysqli_fetch_all($query,MYSQLI_ASSOC);
		exit(json_encode($result));
	}
	

?>