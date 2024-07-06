<?php session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==''){
    header("location: login.php");
    exit();
}
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$sql = "SELECT * FROM users WHERE id = $id";
$result = $mysqli->query($sql);

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
$phn_no = $resultData['phn_no'];
$address = $resultData['address'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Data</h2>
        <p>
            <a href="index.php" class="btn btn-primary">Home</a>
        </p>
        
        <form name="edit" method="post" action="editAction.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" id="age" name="age" value="<?php echo $age; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="phn_no" class="form-label">Phone-no</label>
                <input type="number" class="form-control" id="phn_no" name="phn_no" value="<?php echo $phn_no; ?>">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="4" required><?php echo $address; ?></textarea>
            </div>
            
            <input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="text-end">
           		 <button type="submit" name="update" class="btn btn-primary">Update</button>
			</div>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (not necessary for this form display) -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
