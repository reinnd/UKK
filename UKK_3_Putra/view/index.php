<?php

include_once("../controller/c_auth.php");

use App\c_auth\guard;
guard::logedin();
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="asset/style/font.css">
    <link rel="stylesheet" href="asset/style/prop.css?v=3.1">
    <link rel="stylesheet" href="asset/style/header.css?v=3">
    <link rel="stylesheet" href="asset/style/style.css?v=3">
    <link rel="stylesheet" href="asset/style/frontpage.css?v=1.1">
    <link rel="stylesheet" href="asset/font/fontawesome/css/all.css">
    <script src="asset/js/frontpageHandler.js"></script>
</head>

<body>

    <div class="frontpage-card">
        <h2>Login</h2>
        <p>Masuk untuk menyampaikan aspirasimu</p>

        <form action="../controller/c_user.php?action=login" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="input-container" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="flex input-container2" id="pw_holder">
                    <input type="password" id="password" name="password" class="form-password" required>
                    <span class="flex password-eye" id="pwSwitch"><i id="pw_eye"
                            class="fa-solid fa-eye-slash"></i></span>
                </div>
            </div>

            <button type="submit" class="frontpage-button">MASUK</button>
        </form>

        <div class="switch-gate">
            Belum punya akun? <a href="register.php">Daftar sekarang</a>
        </div>
    </div>
</body>

</html>