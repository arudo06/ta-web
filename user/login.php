<?php

require_once 'functions.php';
session_start();

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['submit'])) {
    if (is_null(login($_POST))) {
        echo "<script>
            alert('Username not registered!');
        </script>";
    } else if (!login($_POST)) {
        echo "<script>
            alert('Wrong username/ password!');
        </script>";
    } else {
        $userData = getUserData($_POST['username']);
        $_SESSION['level'] = $userData['level'];
        $_SESSION['name'] = $userData['username'];
        $_SESSION['id'] = $userData['id'];
        // $_SESSION['photo'] = $userData['image'];
        $_SESSION['login'] = true;
        header('Location: index.php');
        // ($userLevel == 'admin') {
        //     header('Location: ./../ta/admin/home.php');
        // }

        exit;
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
                <h1>Masuk</h1>
                <hr>
                <p>Buycar</p>
                <label for="">Nama pengguna</label>
                <input class="username" type="text" name="username" placeholder="Nama pengguna" required>
                <label for="">Kata sandi</label>
                <input class="password" type="password" name="password" placeholder="Kata sandi" required>
                <button class="submit" type="submit" name="submit" >Masuk</button>
                <p>
                    Belum punya akun?<a href="register.php">Daftar sekarang</a>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/logo_login.jpg" alt="">
        </div>
    </div>
</body>

</html>