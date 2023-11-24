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
    $tra = $_POST["trainname"];
    $cou = $_POST["nooftickets"];
    $sql="INSERT INTO pavan (trainname, nooftickets) VALUES ('$tra','$cou')";
    if($conn->query($sql)) {
        header("location: thankyou1.html");
        exit;
    } else {
        echo "something went wrong";
    }
    $conn->close();
}
