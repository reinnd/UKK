<?php 

// include_once("../controller/c_user.php");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Aspirasi Siswa</title>
    <link rel="stylesheet" href="asset/style//font.css">
    <link rel="stylesheet" href="asset/style//prop.css?v=1.11">
    <link rel="stylesheet" href="asset/style//header2.css?v=1.61">
    <link rel="stylesheet" href="asset/style//style.css?v=1.61211">
    <style>
        /* Menggunakan style yang sama dengan login untuk konsistensi */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--white-700);
            padding: 20px 0;
        }

        .register-card {
            /* background-color: var(--white-800);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); */
            width: 100%;
            max-width: 450px;
        }

        .register-card h2 {
            text-align: center;
            font-weight: 900;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
        }

        .btn-register {
            width: 100%;
            padding: 12px;
            background-color: #e6b5b5;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 1rem;
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.85rem;
        }

        .login-link a {
            color: #5769ce;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div class="register-card">
        <h2>Buat Akun</h2>

        <form action="../controller/c_user.php?action=register" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <!-- <div class="form-group">
                <label for="nis">NIS (Nomor Induk Siswa)</label>
                <input type="text" id="nis" name="nis" class="form-control" required>
            </div> -->

            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select id="kelas" name="kelas" class="form-control" required>
                    <option value="" disabled selected>Pilih Kelas</option>
                    <option value="X">Kelas X</option>
                    <option value="XI">Kelas XI</option>
                    <option value="XII">Kelas XII</option>
                </select>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <input type="text" value="siswa" name="role" hidden>

            <button type="submit" class="btn-register">DAFTAR</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </div>
    </div>

</body>
</html>