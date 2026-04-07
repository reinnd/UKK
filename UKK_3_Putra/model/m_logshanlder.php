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
    }
?>