<?php
require 'koneksi.php';
if (isset($_SESSION['konsul'])) {
    header("Location : konsul.php");
    exit();
}
if(isset($_POST['submit'])){
$id = mysqli_real_escape_string($conn,$_POST["id"]);
$name = mysqli_real_escape_string($conn,$_POST["name"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$no_hp = mysqli_real_escape_string($conn,$_POST["no_hp"]);
$keluhan = mysqli_real_escape_string($conn,$_POST["keluhan"]);

$query_sql = "INSERT INTO pasien (id, name, email, no_hp, keluhan) 
                  VALUES ('$id','$name', '$email', '$no_hp', '$keluhan')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location: konsul.php");
}else{
    echo "Konsultasi anda telah terekam";
}
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tes Kesehatan Mental</title>
    <link rel="icon" href="logo1.png">
    <link rel="stylesheet" href="konsul.css">
</head>
<body>
    <section>
        <header>
            <a href="landingpage.html" class="logo"><img height="40px" width="256px" src="logo.png"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About Us</a></li>
                <li><a href="index.php">Contact</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
            <form action="" method="POST">
            <span>Silakan Berkonsultasi</span>
            <form id="tesForm">
            <input type="name" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="no_hp" placeholder="Nomor Handphone" name="no_hp">
                <input type="keluhan" placeholder="Keluhan Anda" name="keluhan">
                <a href="konsul.php" class="btn-get-started"><button type="submit" name="submit" class="btn-get-started">Kirim</button></a>
        </div>
</form>
</body>
</html>