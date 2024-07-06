<?php session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==''){
    header("location: login.php");
    exit();
}
// Include the database connection file
require_once("dbConnection.php");

$user_id = $_SESSION['user_id'];
// Fetch data in descending order (latest entry first)
$sql = "SELECT * FROM users WHERE `user_id`= '$user_id' ORDER BY id DESC";
$result = $mysqli->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>	
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4 mb-4">Homepage</h2>
        <p>
            <a href="add.php" class="btn btn-primary">Add New Data</a>
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </p>
        <div class="text-right">
        
        </div>
        <table class="table table-striped">
            <thead class="table-light">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>phone Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($res = mysqli_fetch_assoc($result)) { ?>
                    
                    
                    <tr>
                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['age']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['phn_no']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-edit">Edit</a>
                            <a href="delete.php?id=<?php echo $res['id']; ?>" class="btn btn-sm btn-delete" onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Bootstrap JS and dependencies (not necessary for this table display) -->
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>