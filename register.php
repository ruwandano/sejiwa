<?php
require 'koneksi.php';
if(isset($_POST['registerBtn'])){
$id = mysqli_real_escape_string($conn,$_POST["id"]);
$name = mysqli_real_escape_string($conn,$_POST["name"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$user_type = mysqli_real_escape_string($conn,$_POST["user_type"]);

$query_sql = "INSERT INTO user (id, name, email, password, user_type) 
                  VALUES ('$id','$name', '$email', '$password', '$user_type')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: login.php");
}else{
    echo "Register Gagal : " . mysqli_error($conn);
}
}