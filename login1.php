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
    $name = $_POST["passenger_name"];
    $age = $_POST["passenger_age"];
    $num = $_POST["phonenumber"];
    $sou = $_POST["source"];
    $des = $_POST["destination"];
    $aad = $_POST["aadharnumber"];
    $sql="INSERT INTO sathwik (username, password,passenger_name,passenger_age,phonenumber,source,destination,aadharnumber) VALUES ('$user','$pass','$name','$age','$num','$sou','$des','$aad')";
    if($conn->query($sql)) {
        header("location: traindetails.html");
        exit;
    } else {
        echo "something went wrong";
    }
    $conn->close();
}
