<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {

	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password == $confirm_password){
		$sql = "INSERT INTO register (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

		$result = $mysqli->query($sql);

        echo "<div class='text-center mt-5 pt-5'>";
		echo "<p style='color:green' class='mt-5'>Data updated successfully!</p>";
		echo "<a href='index.php' class='btn btn-primary'>View Result</a>";
		echo "</div>";
    }else{
        echo "Password and Confirm Password Not Match!";
    }
		
		// Insert data into database

		
		// Display success message
	
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Register</h2>
    <p>
      <a href="index.php" class="btn btn-primary">Home</a>
    </p>

    <form action="" method="post" name="register">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div>
      <div class="text-end">
        <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
