<?php
if($_POST) {
    $servername = "localhost";
    $username = "root";
    $password ="";
    $database ="saveetha";
    $conn = new mysqli($servername,$username,$password,$database);
    if($conn->connect_error) {
        echo "connection error";
    }
    $user = $_POST["username"];
    $pass = $_POST["password"];
    $sql="INSERT INTO raju (username, password) VALUES ('$user','$pass')";
    if($conn->query($sql)) {
        header("location: shoppingpage.html");
        exit;
    } else {
        echo "something went wrong";
    }
    $conn->close();
}
