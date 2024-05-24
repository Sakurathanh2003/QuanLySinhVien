<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
session_start();

if (isset($_SESSION["didLogin"])) {
    if ($_SESSION["didLogin"]) {
        header("Location: /QuanLySinhVien/index.php");
    }
}
?>
<body>
    <div class="wrapper">
        <form action="/QuanLySinhVien/BLL/loginBLL.php" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input  type="text" 
                        placeholder="Email"
                        name="email" 
                        required>

                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input  type="password" 
                        placeholder="password" 
                        name="password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        required>

                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="login">Login</button>
            <div class="register-link">
                <p>Don't have an account?<a href="">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>