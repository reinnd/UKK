<?php 

include_once "m_connection.php";

abstract class m_user {

    public function __construct(){
        $conn = new m_connection();
    }

    abstract public function login($username);
    
    // public function logout(){

    // }
}

class m_admin extends m_user {

    function login($username){
        $sql = "SELECT * FROM admin WHERE username = '$username'";
        $query = mysqli_query($this->conn->conn, $sql);
        return $query;
    }
}

class m_siswa extends m_user {

    function login($username){
        $conn = new m_connection();
        $sql = "SELECT * FROM siswa WHERE username = '$username'";
        $query = mysqli_query($conn->conn, $sql);
        return $query;
    }

    function get_data(){
        $conn = new m_connection();
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($conn->conn, $sql);
        return $query;
    }

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

}

?>