<?php
session_start();
include "./function.php";



if(!empty($_POST["username"]) && !empty($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost","root","", "btl_cv");
    if(!$conn){
        die("Không thể kết nối tới DB Server");
    }

    $sql = "SELECT * FROM admin WHERE username='${username}' AND password='${password}'";

    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_assoc($query);

    if($data) {
        $_SESSION['admin'] = $data;
        header("location: dashboard.php");
    } else {
        header("location: index.php");
    }
}
?>