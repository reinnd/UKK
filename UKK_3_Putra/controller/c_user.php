<?php 

include_once "../m_user.php";

$user = new m_user();

try {
    if(!empty($_GET['action'])){

        if ($_GET['action'] != "delete"){

            if ($_GET['action'] == "login") {

                $username   = $_POST['username'];
                $password   = $_POST['password'];
                
                $user->get_admin();
                $admin_data = mysqli_fetch_object($query);

                if ($admin_data && password_verify($password, $admin_data->password)) {
                    $_SESSION['id']    = $admin_data->id_admin;
                    $_SESSION['role']  = 'admin';
                    $_SESSION['nama']  = $admin_data->username;;
                    header("location: ../admin/dashboard.php");
                    exit;
                }

                $user->get_siswa();
                $siswa_data = mysqli_fetch_object($query);

                if ($siswa_data && password_verify($password, $siswa_data->password)) {
                    $_SESSION['id']    = $siswa_data->id_admin;
                    $_SESSION['role']  = 'admin';
                    $_SESSION['nama']  = $siswa_data->username;;
                    header("location: ../user/dashboard.php");
                    exit;
                }

            } elseif ($_GET['action'] == "register") {
                
                $username           = $_POST['username'];
                $password_raw       = $_POST['password'];
                $password_cooked    = password_hash($password_raw, PASSWORD_DEFAULT);
                $class              = $_POST['kelas'];
                $role               = "siswa";

                $user->register($useranme, $password_cooked, $class, $role);


            } elseif($_GET['action'] == 'logout'){
                // credit - wifcat
                session_start(); // restart
                session_unset(); // Kosongkan semua variabel session
                session_destroy(); // Hancurkan session-nya
                header("Cache-Control: no-cache, must-revalidate");
                header("Location: ../Views/V_Login.php");
                exit;
            }
        } else {
            $user->delete_siswa();
        }
    }
     else {
        $user->get_siswa();
    }
} catch (Exception $e) {
    $e->getMessage();
}
?>