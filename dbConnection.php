<?php

$mysqli = mysqli_connect("localhost", "root", "", "crud_test");

if (mysqli_connect_error()) {
    echo "Connection Error: " . mysqli_connect_error();
}

?>