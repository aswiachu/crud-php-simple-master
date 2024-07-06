<html>
<head>
	<title>Add Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");
 session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==''){
    header("location: login.php");
    exit();
}

if (isset($_POST['submit'])) {

	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$phn_no = $_POST['phn_no'];
	$address =$_POST['address'];
	$user_id = $_SESSION["user_id"];
		
		// Insert data into database
		$sql = "INSERT INTO users (`name`, `age`, `email`, `phn_no`, `address`,`user_id`) VALUES ('$name', '$age', '$email','$phn_no','$address','$user_id')";

		$result = $mysqli->query($sql);
		
		// Display success message
		echo "<div class='text-center mt-5 pt-5'>";
		echo "<p style='color:green' class='mt-5'>Data updated successfully!</p>";
		echo "<a href='index.php' class='btn btn-primary'>View Result</a>";
		echo "</div>";
	}

?>
</body>
</html>
