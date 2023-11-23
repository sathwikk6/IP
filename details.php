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
    $qua1 = $_POST["quantity_fridge"];
    $pri1 = $_POST["cost_fridge"];
    $war1 = $_POST["waranty_fridge"];
    $qua2 = $_POST["quantity_wm"];
    $pri2 = $_POST["cost_wm"];
    $war2 = $_POST["waranty_wm"];
    $qua3 = $_POST["quantity_ac"];
    $pri3 = $_POST["cost_ac"];
    $war3 = $_POST["waranty_ac"];
    $qua4 = $_POST["quantity_mo"];
    $pri4 = $_POST["cost_mo"];
    $war4 = $_POST["waranty_mo"];
    $qua5 = $_POST["quantity_dw"];
    $pri5 = $_POST["cost_dw"];
    $war5 = $_POST["waranty_dw"];
    $sql1="INSERT INTO fridge (quantity_fridge,cost_fridge,waranty_fridge) VALUES ('$qua1','$pri1','$war1');";
    $sql2="INSERT INTO washingmachine (quantity_wm,cost_wm,waranty_wm) VALUES ('$qua2','$pri2','$war2');";
    $sql3="INSERT INTO airconditioner (quantity_ac,cost_ac,waranty_ac) VALUES ('$qua3','$pri3','$war3');";
    $sql4="INSERT INTO microoven (quantity_mo,cost_mo,waranty_mo) VALUES ('$qua4','$pri4','$war4');";
    $sql5="INSERT INTO dishwasher (quantity_dw,cost_dw,waranty_dw) VALUES ('$qua5','$pri5','$war5');";
    $allQueries = $sql1 . $sql2 . $sql3 . $sql4 . $sql5;
    if ($conn->multi_query($allQueries)) {
        header("location: thankyou.html");
        exit;
    } else {
        echo "something went wrong";
    }
    $conn->close();
}
?>