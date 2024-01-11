<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pasien</title>
    <link rel="icon" href="logo1.png">
    <link rel="stylesheet" href="dokter.css">
</head>
<body>
    <section>
        <header>
            <a href="landingpage.html" class="logo"><img height="40px" width="256px" src="logo.png"></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About Us</a></li>
                <li><a href="index.php">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </header>
<table border="1">
    <tr>
        <th width="50">Id</th>
        <th width="50">Nama</th>
        <th width="255">Email</th>
        <th width="150">No Handphone</th>
        <th width="100">Keluhan</th>
    </tr>

    <?php
    include "koneksi.php";
    $ambildata = mysqli_query($conn, "SELECT * FROM pasien");
    while ($tampil = mysqli_fetch_array($ambildata)){
        echo "
        <tr>
            <th>$tampil[id]</th>
            <th>$tampil[name]</th>
            <th>$tampil[email]</th>
            <th>$tampil[no_hp]</th>
            <th>$tampil[keluhan]</th>
            </tr>";

    }
    ?>
</body>
</html>