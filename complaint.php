<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

	$conn= new mysqli($servername, 
						$username, 
						$password, 
						$dbname);
	if ($conn->connect_error) {

		die("connection went wrong: " . $conn->connect_error);
	}

		$lec_name = $_POST['lec_name'];
		$lec_id = $_POST['lec_id'];
		$complaint = $_POST['complaint'];
		
	$sql = "INSERT INTO complaint (lec_name, lec_id, complaint)
			VALUES ('$lec_name', '$lec_id', '$complaint')";

		
	if($conn->query($sql)===TRUE)
	{
		echo  "<script type='text/javascript'>alert('data inserted'); </script>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;

	}
	$conn->close();

?>