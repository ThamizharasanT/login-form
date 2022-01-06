<?php

session_start();


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myproject1";


$email = $_POST["email"];
$pwd = $_POST["password"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is not valid email address";
} else {

    $sql = "SELECT * FROM `form` WHERE email='$email' AND password='$pwd'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION["email"] = $email;
        echo "success";
    } else {
        echo " Enter  valid email and password";
    }
}