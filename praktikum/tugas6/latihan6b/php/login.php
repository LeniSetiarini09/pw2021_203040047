<?php
session_start();
require 'functions.php';

// melakukan pengecekan apakah user sudah melakukan Login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

    // Login
    if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    
    // mencocokan USERNAME dan PASSWORD 
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
       if ($password == $row['password']) {
           $_SESSION['username'] = $_POST['username'];
           $_SESSION['hash'] = $row['id'];
       }
       if ($row['id'] == $_SESSION['hash']) {
           header("Location: admin.php");
           die;
       }
       header("Location: ../index.php");
       die;
    }  
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>

    <h1>Halaman Login</h1>

    <form action= "" method="post">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">Username atau Password salah</p>
        <?php endif; ?>
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    
    <div class="registrasi">
            <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
    </div>
    
    </form>
</body>
</html>