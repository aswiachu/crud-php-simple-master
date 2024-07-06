<?php require_once("dbConnection.php");
if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $phone = $_POST['phone'];

    // echo $username ."/". $age ."/". $password ."/". $confirm_password ."/". $phone;
    // exit();
if($password == $confirm_password){
    $sql ="INSERT INTO register (`username`,`password`,`age`,`email`,`phone`) VALUES('$username','$password','$age','$email','$phone')";
    $result =$mysqli->query($sql);

    if($result){
        header("location:login.php");
        exit();
    }else{
        echo "Error: " . $mysqli->error;
        exit();
    }
}else{
    echo "Password And Confirm Password doesn't Match";
}
}
?>

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
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="phone" class="form-control" id="phone" name="phone" required>
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
        <a href="login.php">Already registered? Go to the login page.</a>
    </div>

    <!-- Bootstrap JS and dependencies (not necessary for this form display) -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
