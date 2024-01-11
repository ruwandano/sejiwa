<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['loginBtn'])) {
    header("Location : index.php");
    exit();
}
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $password = $_POST['password'];

    $query_sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $query_sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        if($row['user_type']=='admin'){
            $_SESSION['admin_name']=$row['name'];
        header("Location: admin.php");
        exit();
    }elseif($row['user_type']=='user'){
        $_SESSION['user_name']=$row['user'];
    header("Location: index.php");
    exit();
    }elseif($row['user_type']=='dokter'){
        $_SESSION['dokter_name']=$row['dokter'];
    header("Location: dokter.php");
    exit();
    }
    }else{
        echo "<script>alert('name atau password anda salah. Silahkan coba lagi')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <title>login</title>
    <link rel="icon" href="logo1.png">
</head>

<body>
    <header>
        <a href="landingpage.html" class="logo"><img height="40px" width="256px" src="logo.png"></a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About Us</a></li>
            <li><a href="index.php">Contact</a></li>
        </ul>
    </header>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="https://www.google.co.id/?hl=id" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="https://id.linkedin.com/" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="name" placeholder="Name" name="name">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="password">
                <select name="user_type">
                    <option value="user">user</option>
                    <option value="admin">admin</option>
                    <option value="dokter">dokter</option>
                </select>
                <a href="login.php" class="btn-get-started"><button type="submit" name="registerBtn" class="btn-get-started">Register</button></a>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="https://www.google.co.id/?hl=id" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="https://www.facebook.com/" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://github.com/" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="https://id.linkedin.com/" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" id="name" placeholder="name" name="name" required>
                <input type="password" id="password" placeholder="password" name="password" required>
                <a href="#">Forget Your Password?</a>
                <a href="index.php" class="btn-get-started"><button type="submit" name="submit" class="btn-get-started">Sign In</button></a>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Sejiwa's !</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script  src="login.js"></script>
</body>

</html>