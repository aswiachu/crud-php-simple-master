
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = $_POST['id'];
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];	
	$phn_no = $_POST['phn_no'];
	$address =$_POST['address'];
	
		// Update the database table
		$sql = "UPDATE users SET `name` = '$name', `age` = '$age', `email` = '$email' , `phn_no` = '$phn_no', `address` = '$address' WHERE `id` = $id";

		$result = $mysqli->query($sql);
		
		// Display success message
		echo "<div class='text-center mt-5 pt-5'>";
		echo "<p style='color:green' class='mt-5'>Data updated successfully!</p>";
		echo "<a href='index.php' class='btn btn-primary'>View Result</a>";
		echo "</div>";
	}

