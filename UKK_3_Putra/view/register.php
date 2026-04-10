<?php

// include_once("../controller/c_user.php");

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        <h2>Buat Akun</h2>

        <form action="../controller/c_user.php?action=register" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="input-container" required>
            </div>

            <div class="form-group">
                <label for="fullname">Nama lengkap</label>
                <input type="text" id="fullname" name="fullname" class="input-container">
            </div>

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas" class="input-container" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="X">Kelas X</option>
                    <option value="XI">Kelas XI</option>
                    <option value="XII">Kelas XII</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <div class="flex input-container2" id="pw_holder">
                    <input type="password" id="password" name="password" class="form-password" required>
                    <span class="flex password-eye" id="pwSwitch"><i id="pw_eye"
                            class="fa-solid fa-eye-slash"></i></span>
                </div>
            </div>

            <input type="text" value="siswa" name="role" hidden>

            <button type="submit" class="frontpage-button">DAFTAR</button>
        </form>

        <div class="switch-gate">
            Sudah punya akun? <a href="index.php">Login di sini</a>
        </div>
    </div>

</body>

</html>