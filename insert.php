<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myproject1";

$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["password"];
$city = $_POST["city"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
} else {
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is not valid email address";
} else {
    $sql1 = "SELECT * FROM `form` WHERE email='$email'";
    $result = $conn->query($sql1);

    $sql = "INSERT INTO `form`( `name`, `email`, `password`, `city`) VALUES ('$name','$email','$pwd','$city')";

    if ($result->num_rows > 0) {

        echo "email allready exide";
    } else if ($in = $conn->query($sql)) {
        echo "You have been registered";
    }
}