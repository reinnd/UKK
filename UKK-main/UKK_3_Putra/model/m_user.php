<?php 

include_once "m_connection.php";

class m_user {
    function register($username, $password_cooked, $class, $role ){
        $conn = new m_connection();
        $sql = "INSERT INTO siswa (`id_siswa`, `username`, `password`, `kelas`, `nis`, `role`, `waktu_buat`) 
                VALUES ( NULL,'$username','$password_cooked','$class', DEFAULT, '$role',NOW()";
        $query = mysqli_query($conn->conn, $sql);

        if($query){
            echo "<script>alert('register berhasil');  window.location='../view/login.php';</script>";
          } else{
            echo "<script>alert('terjadi kesalahan');  window.location='../view/register.php';</script>";
          }
    }
    function logout(){

    }
    function delete_siswa(){

    }
}

class m_admin extends m_user {

    function login($username, $password){
        $conn = new m_connection();
        $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($conn->conn, $sql);
        return $query;
    }
}

class M_siswa extends m_user {

    function login($username, $password){
        $conn = new m_connection();
        $sql = "SELECT * FROM siswa WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($conn->conn, $sql);
        return $query;
    }
}

?>