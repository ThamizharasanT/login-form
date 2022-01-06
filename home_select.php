<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myproject1";


$email = $_POST["email"];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}


$sql = "SELECT * FROM `form` WHERE email='$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // $_SESSION["email"] = $email;
    echo "success";
} else {
    // header("location:ui_signup.html");
    echo "invalideemail";
}