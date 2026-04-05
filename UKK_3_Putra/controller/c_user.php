<?php 

include_once __DIR__ . "../../model/m_user.php";

$admin = new m_admin();
$siswa = new m_siswa();

try {
    if(!empty($_GET['action'])){

        if ($_GET['action'] != "delete"){

            if ($_GET['action'] == "login") {

                $username   = $_POST['username'];
                $password   = $_POST['password'];

                $result = $admin->login($username);
    
                if ($result && $result->num_rows > 0) {
                    $data = $result->fetch_object();
                    if (password_verify($password, $data->password)) {
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['id']  = $data->id_admin;
                        $_SESSION['user']  = $data->username;
                        $_SESSION['role']  = 'admin';
                        header("Location: ../view/admin/a_dashboard.php");
                        exit;
                    }
                }

                $result = $siswa->login($username);

                if ($result && $result->num_rows > 0) {
                    $data = $result->fetch_object();
                    if (password_verify($password, $data->password)) {
                        session_start();
                        $_SESSION['login'] = true;
                        $_SESSION['id']  = $data->id_siswa;
                        $_SESSION['user']  = $data->username;
                        $_SESSION['role']  = 'siswa';
                        header("Location: ../view/user/u_dashboard.php");
                        exit;
                    }
                }

                echo "<script>
                        alert('Login Gagal! Pastikan username dan password benar.');
                        window.location.href = '../view/login.php';
                      </script>";
                

            } elseif ($_GET['action'] == "register") {

                if($_GET['type'] == "primary"){
                     
                    $username           = $_POST['username'];
                    $password_raw       = $_POST['password'];
                    $password_cooked    = password_hash($password_raw, PASSWORD_DEFAULT);
                    $role               = $_POST['role'];

                    $admin->register($username, $password_cooked, null, $role);

                } else {

                    $username           = $_POST['username'];
                    $password_raw       = $_POST['password'];
                    $password_cooked    = password_hash($password_raw, PASSWORD_DEFAULT);
                    $class              = $_POST['kelas'];
                    $role               = $_POST['role'];

                    $siswa->register($username, $password_cooked, $class, $role);

                }

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
            
            if ($_GET['type'] == "primary-del") {
                $id_admin = $_GET['id_admin'];
                $admin->delete_data($id_admin);
            } else {
                $id_siswa = $_GET['id_siswa'];
                $siswa->delete_data($id_siswa);
            }
        }
    }
     else {
        $get_admin = $admin->get_data();
        $get_siswa = $siswa->get_data();
        $get_all = array_merge($get_admin, $get_siswa);
    }
} catch (Exception $e) {
    $e->getMessage();
}
?>
