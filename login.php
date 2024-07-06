<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>

<?php session_start();
require_once("dbConnection.php");

if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['password'];
    // echo "Name: " . $username;
    // die();
    // echo $username ."/". $age ."/". $password ."/". $confirm_password ."/". $phone;
    // exit();

    $sql ="SELECT * FROM register WHERE `username` = '$username' AND `password`='$password'";
    $result =$mysqli->query($sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount == 1){
        $row = mysqli_fetch_assoc($result);
        // print_r($row);
        // exit();
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['id'];

        header("location:index.php");
        exit();
    }else{
        echo "<div class='text-center mt-5 pt-5'>";
        echo "Username or Password Does not match<br>";
            echo "<a href='login.php'>Go to login page</a>";
            echo "</div>";
        exit();
    }
}
?>


    <div class="container">
        <h2>User Register Page</h2>
        <!-- <p>
            <a href="index.php" class="btn btn-primary">Home</a>
        </p> -->

        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

			<div class="text-end">
           		 <button type="submit" name="submit" class="btn btn-primary">Login</button>
			</div>
        </form>
        <a href="adminregister.php">Don't have an account? Register here.</a>
    </div>

    <!-- Bootstrap JS and dependencies (not necessary for this form display) -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
