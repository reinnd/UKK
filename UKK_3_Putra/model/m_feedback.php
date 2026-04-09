<?php

    include_once "m_connection.php";

    class m_feedback{
        private $conn;

        public function __construct(){
            $database = new m_connection();
            $this->conn = $database->conn;
        }

        public function get_feedback_by_aspirasi($id_feedback){
            $sql = "SELECT feedback.* , admin1.username AS username1, admin2.username AS username2
                    FROM feedback
                    LEFT JOIN `admin` AS admin1 ON feedback.id_admin = admin1.id_admin
                    LEFT JOIN `admin` AS admin2 ON feedback.id_admin2 = admin2.id_admin
                    WHERE feedback.id_feedback = $id_feedback";
            $query = mysqli_query($this->conn, $sql);
            if($query){
                return mysqli_fetch_object($query);
            } else {
                $no_data = "Belum ada balasan";
                $obj = (object) $no_data;
                echo $obj->scalar;
            }
        }

        public function add_data($isi_feedback, $id_admin, $id_aspirasi) {
            mysqli_begin_transaction($this->conn);
            try{
            //feedback
                $sql = "INSERT INTO `feedback`(`id_feedback`, `isi_feedback`, `id_admin`, `isi_feedback2`, `id_admin2`, `waktu_upload`) 
                    VALUES (NULL, '$isi_feedback', $id_admin, NULL, NULL, NOW() )";
                $query = mysqli_query($this->conn, $sql);

                $id_feedback = mysqli_insert_id($this->conn);
            //update aspirasi
                $sql2 = "UPDATE aspirasi SET id_feedback = $id_feedback, `status` = 'proses' WHERE id_aspirasi = $id_aspirasi";
                $query2 = mysqli_query($this->conn, $sql2);

                $commit = mysqli_commit($this->conn);
                if($commit) {
                    echo "<script>alert('Data berhasil ditambah'); window.location.href='../view/admin/a_aspirasi.php';</script>";
                } else {
                    echo "<script>alert('Data gagal ditambah'); window.location.href='../view/admin/a_aspirasi.php';</script>";
                }
            } catch(Exception $e) {
                mysqli_rollback($this->conn);
                echo "error: " . $e->getMessage();
            }
        }

        public function update_data($isi_feedback2, $id_admin2, $id_feedback, $id_aspirasi){

            mysqli_begin_transaction($this->conn);
            try{
            //feedback
                $sql = "UPDATE feedback SET isi_feedback2 = '$isi_feedback2', id_admin2 = $id_admin2 WHERE id_feedback = $id_feedback";
                $query = mysqli_query($this->conn, $sql);
                
            //update aspirasi
                $sql2 = "UPDATE aspirasi SET `status` = 'selesai' WHERE id_aspirasi = $id_aspirasi";
                $query2 = mysqli_query($this->conn, $sql2);

                $commit = mysqli_commit($this->conn);
                if($commit){
                    echo "<script>alert('Berhasil menyelesaikan aspirasi'); window.location.href='../view/admin/a_aspirasi.php';</script>";
                } else {
                    echo "<script>alert('Aspirasi tidak dapat diselesaikan'); window.location.href='../view/admin/a_aspirasi.php';</script>";
                }
            } catch(Exception $e) {
                mysqli_rollback($this->conn);
                echo "error: " . $e->getMessage();
            }
        }
    }
?>