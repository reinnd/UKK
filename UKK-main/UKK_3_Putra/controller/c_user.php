<?php 

include_once "../model/m_user.php";

$user = new m_user();
$admin = new m_admin();
$siswa = new m_siswa();

try {
    if(!empty($_GET['action'])){

        if ($_GET['action'] != "delete"){

            if ($_GET['action'] == "login") {

                $username   = $_POST['username'];
                $password   = $_POST['password'];

                
                $result = $admin->login($username, $password);
    
                if ($result && $result->num_rows > 0) {
                    $data = $result->fetch_object();
                    $_SESSION['login'] = true;
                    $_SESSION['user']  = $data->username;
                    $_SESSION['role']  = 'admin';
                    header("Location: ../view/admin/a_dashboard.php");
                    exit;
                }

                $result = $siswa->login($username, $password);

                if ($result && $result->num_rows > 0) {
                    $data = $result->fetch_object();
                    $_SESSION['login'] = true;
                    $_SESSION['user']  = $data->username;
                    $_SESSION['role']  = 'siswa';
                    header("Location: ../view/siswa/u_dashboard.php");
                    exit;
                }

                echo "Username atau Password salah!";
                
                
      

            } elseif ($_GET['action'] == "register") {
                
                $username           = $_POST['username'];
                $password_raw       = $_POST['password'];
                $password_cooked    = password_hash($password_raw, PASSWORD_DEFAULT);
                $class              = $_POST['kelas'];
                $role               = "siswa";

                $user->register($useranme, $password_cooked, $class, $role);


            } elseif($_GET['action'] == 'logout'){
                // c - wifcat
                session_start(); // restart
                session_unset(); // Kosongkan semua variabel session
                session_destroy(); // Hancurkan session-nya
                header("Cache-Control: no-cache, must-revalidate");
                header("Location: ../Views/V_Login.php");
                exit;
            }
        } else {
            
            if ($_GET['action'] == "admin") {
                # code...
            }
        }
    }
     else {
        $user->get_siswa();
    }
} catch (Exception $e) {
    $e->getMessage();
}
?>