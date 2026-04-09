<?php 
    include_once "m_connection.php";
    class logs_gate{

        private $conn;
        public function __construct(){
            $database = new m_connection();
            $this->conn = $database->conn;
        }
        public function log_state($id_actor, $role, $act, $id_target, $detail){
            
            $agent = $_SERVER['HTTP_USER_AGENT'];
            $ip = $_SERVER['REMOTE_ADDR'];

            $log_storage = "INSERT INTO `logs`(`id_log`, `id_actor`, `role`, `aksi`, `id_target`, `detail`, `user_agent`, `alamat_ip`, `waktu_upload`) 
                            VALUES (NULL,
                                    $id_actor,
                                    '$role',
                                    '$act',
                                    $id_target,
                                    '$detail',
                                    '$agent',
                                    '$ip',
                                    NOW())";
            $cloak_log = mysqli_query($this->conn, $log_storage);
            if($cloak_log){
                return true;
            } else {
                return false;
            }
        }

        public function get_data(){
            $sql = "SELECT * FROM `logs`";
            $query = mysqli_query($this->conn, $sql);
            if($query->num_rows > 0){
                while($row = mysqli_fetch_object($query)){
                    $result[] = $row;
                }
                return $result;
            } else {
                echo "ga ada data";
            }
        }

        public function get_data_by_user_id($id_actor, $role){

            if($role == 'admin'){
                $sql = "SELECT logs.*, admin.username
                        FROM `logs`
                        INNER JOIN `admin` ON logs.id_actor = siswa.id_admin
                        WHERE logs.id_actor = $id_actor AND logs.role = '$role'";
            } else {
                $sql = "SELECT logs.*, siswa.username
                        FROM `logs`
                        INNER JOIN siswa ON logs.id_actor = siswa.id_siswa
                        WHERE logs.id_actor = $id_actor AND logs.role = '$role'";
            }
            
            $query = mysqli_query($this->conn, $sql);
            if($query->num_rows > 0){
                while($row = mysqli_fetch_object($query)){
                    $result[] = $row;
                }
                return $result;
            } else {
                echo "ga ada data";
            }
        }
    }

?>