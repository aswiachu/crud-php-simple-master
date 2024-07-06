<?php session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id']==''){
    header("location: login.php");
    exit();
}
// Include the database connection file
require_once("dbConnection.php");

// Get id parameter value from URL
$id = $_GET['id'];

// Delete row from the database table
$sql = "DELETE FROM users WHERE id = $id";

$result = $mysqli->query($sql);

// Redirect to the main display page (index.php in our case)
header("Location:index.php");
