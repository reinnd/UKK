<?php 

// include_once("../controller/c_user.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/login_style.css?v=1.2">
</head>
<body>
    <main>
        <div class="box">
            <div class="box2"><br>
                <p style="font-size: 40px;">register</p>
                
                <form action="">
                    <div class="box">
                        <label for="">username</label>
                        <input type="text">
                    </div>
                    <div class="box">
                        <label for="">kelas</label>
                        <input type="text">
                    </div>
                    <div class="box">
                        <label for="">password</label>
                        <input type="password">
                        <label for="">tulis ulamg password</label>
                        <input type="password">
                    </div>
                    <!-- role default siswa -->
                    <!-- status -->

                    <button class="login" type="submit">register</button>
                <p class="reg">Sudah punya akun? Ayo <a href="login.php">Log-in!</a></p>
                </form>
            </div>
        </div>

            
    </main>
</body>
</html>