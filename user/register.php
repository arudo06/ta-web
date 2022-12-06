<?php
require_once 'functions.php';
session_start();
if(isset($_SESSION['login'])){
    header('Location: index.php');
    exit;
}

$alert = '';

if (isset($_POST['submit'])) {
    if ($_POST['password'] != $_POST['confirm']) {
        $alert = "Password confirm doesn't match!";
    } else {
        $result = register($_POST);
        if ($result) {
            echo "<script>
                document.location.href= 'login.php';
            </script>";
        } else {
            echo "<script>
                document.location.href = 'register.php';
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buycar</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/fav.png">
</head>

<body>
    <div class="container">
        <div class="login">
            <form method="POST" action="">
                <h1>Daftar</h1>
                <hr>
                <p>Buycar</p>
                <label for="">Nama pengguna</label>
                <input class="username" type="text" name="username" placeholder="Nama pengguna" required>
                <label for="">Kata sandi</label>
                <input class="password" type="password" name="password" placeholder="Buat Kata sandi" required>
                <label for="">Konfirmasi kata sandi</label>
                <input class="confirm" type="password" name="confirm" placeholder="Masukkan Kata sandi baru" required>
                <button class="submit" type="submit" name="submit">Daftar</button>
            </form>
        </div>
        <div class="right">
            <img src="img/logo_login.jpg" alt="">
        </div>
    </div>
</body>

</html>