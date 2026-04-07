<?php 

include_once "m_connection.php";

abstract class m_user {

    protected $conn;
    protected $username;
    protected $password;

    public function __construct(){
        $database = new m_connection();
        $this->conn = $database->conn;
    }

    public function get_data(){}

    public function login($username){}

    public function register($username, $password_cooked, $class, $role ){}

    public function delete_data($id){}

    protected function dupe_guard($username, $table){
        $dupe_handler = "SELECT * FROM $table WHERE username = '$username'";
        $query_dupe = mysqli_query($this->conn, $dupe_handler);
        return mysqli_num_rows($query_dupe) > 0;
    }
    
}

class m_admin extends m_user { 

    public function login($username){
        $sql = "SELECT * FROM admin WHERE username='$username'";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    public function register($username, $password_cooked, $class, $role ){

        $dupe = $this->dupe_guard($username, 'admin');
        if($dupe){
            echo "<script>
                    alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                    window.location.href = '../view/admin/a_anggota-tambah.php';
                  </script>";
            exit();
        }

        $dupe = $this->dupe_guard($username, 'siswa');
        if($dupe){
            echo "<script>
                    alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                    window.location.href = '../view/admin/a_anggota-tambah.php';
                  </script>";
            exit();
        }

        $sql = "INSERT INTO `admin` (`id_admin`, `username`, `password`, `role`, `waktu_buat`) 
                VALUES (NULL,'$username','$password_cooked','$role',NOW())";
        $query = mysqli_query($this->conn, $sql);
        
        if($query) {
            echo "<script>
                    alert('Registrasi Berhasil! Silakan login dengan akun baru Anda.');
                    window.location.href = '../view/admin/a_tambah-anggota.php';
                  </script>";
            return $query = true;
        } else {
            echo "<script>
                    alert('Registrasi Gagal: Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
                    window.location.href = '../view/register.php';
                  </script>";
            return $query = false;
        }
    }

    public function get_data(){
        $sql = "SELECT * FROM admin ORDER BY waktu_buat DESC";
        $query = mysqli_query($this->conn, $sql);

       if ($query->num_rows > 0) {
            while($data = mysqli_fetch_object($query)){
            $result[] = $data;
        }
        return $result;
        } else {
            echo "ga ada data";
        }
    }

    public function delete_data($id_admin){
        $sql = "DELETE FROM admin WHERE id_admin = $id_admin";
        $query = mysqli_query($this->conn, $sql);
        if($query){
            echo "<script>alert('data dihapus');  window.location.href='../view/admin/a_tambah-anggota.php';</script>";
        } else {
            echo "<script>alert('data gagal dihapus');  window.location.href='../view/admin/a_tambah-anggota.php';</script>";
        }
    }
}

class m_siswa extends m_user {

    public function login($username){
        $sql = "SELECT * FROM siswa WHERE username='$username'";
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    public function get_data(){
        $sql = "SELECT * FROM siswa ORDER BY waktu_buat DESC";
        $query = mysqli_query($this->conn, $sql);

        if ($query->num_rows > 0) {
            while($data = mysqli_fetch_object($query)){
            $result[] = $data;
        }
        return $result;
        } else {
            echo "ga ada data";
        }
    }

    public function register($username, $password_cooked, $class, $role ){

        $dupe = $this->dupe_guard($username, 'admin');
        if($dupe){
            if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                echo "<script>
                        alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                        window.location.href = '../view/admin/a_anggota-tambah.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                        window.location.href = '../view/register.php';
                      </script>";
            }
            exit();
        }

        $dupe = $this->dupe_guard($username, 'siswa');
        if($dupe){
            session_start();
            if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                echo "<script>
                        alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                        window.location.href = '../view/admin/a_anggota-tambah.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Registrasi Gagal: Username sudah terdaftar. Silakan gunakan username lain.');
                        window.location.href = '../view/register.php';
                      </script>";
            }
            exit();
        }
        $sql = "INSERT INTO siswa (`id_siswa`, `username`, `password`, `kelas`, `nis`, `role`, `waktu_buat`) 
                VALUES (NULL, '$username', '$password_cooked', '$class', DEFAULT, '$role', NOW())";
        $query = mysqli_query($this->conn, $sql);

        if($query) {
            if(isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                echo "<script>
                        alert('Berhasil menambah siswa.');
                        window.location.href = '../view/admin/a_tambah-anggota.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Registrasi Berhasil! Silakan login dengan akun baru Anda.');
                        window.location.href = '../view/login.php';
                      </script>";
            }
            return $query = true;
        } else {
            echo "<script>
                    alert('Registrasi Gagal: Terjadi kesalahan saat menyimpan data. Silakan coba lagi.');
                    window.location.href = '../view/register.php';
                  </script>";
            return $query = false;
        }
        
    }

    public function delete_data($id_siswa){
        $sql = "DELETE FROM siswa WHERE id_siswa = $id_siswa";
        $query = mysqli_query($this->conn, $sql);
        if($query){
            echo "<script>alert('data dihapus');  window.location.href='../view/admin/a_tambah-anggota.php';</script>";
        } else {
            echo "<script>alert('data gagal dihapus');  window.location.href='../view/admin/a_tambah-anggota.php';</script>";
        }

    }
    

}

?>