<?php 

// include_once("../controller/c_user.php");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aspirasi Siswa</title>
    <link rel="stylesheet" href="css/prop.css">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--white-500);
            margin: 0;
        }

        .login-card {
            background-color: var(--white-800);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-card h2 {
            margin-bottom: 0.5rem;
            font-weight: 900;
            font-size: 2rem;
        }

        .login-card p {
            color: #666;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        .form-group {
            text-align: left;
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            background-color: var(--white-1000);
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            background-color: #e6b5b5; /* Warna pinkish sesuai menu aktifmu */
            border: none;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 1rem;
            transition: 0.3s;
        }

        .btn-login:hover {
            background-color: #d4a4a4;
        }

        .register-link {
            margin-top: 1.5rem;
            font-size: 0.85rem;
        }

        .register-link a {
            color: #5769ce;
            font-weight: 600;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h2>Login</h2>
        <p>Masuk untuk menyampaikan aspirasimu</p>

        <form action="../controller/c_user.php?action=login" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn-login">MASUK</button>
        </form>

        <div class="register-link">
            Belum punya akun? <a href="register.php">Daftar sekarang</a>
        </div>
    </div>

</body>
</html>