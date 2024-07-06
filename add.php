<?php session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==''){
    header("location: login.php");
    exit();
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
        <h2>Add Data</h2>
        <p>
            <a href="index.php" class="btn btn-primary">Home</a>
        </p>

        <form action="addAction.php" method="post" name="add">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
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
                <label for="phn_no" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="phn_no" name="phn_no" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>
			<div class="text-end">
           		 <button type="submit" name="submit" class="btn btn-primary">Add</button>
			</div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (not necessary for this form display) -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
