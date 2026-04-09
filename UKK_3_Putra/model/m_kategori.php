<?php
  include_once "m_connection.php";
  include_once "m_logshanlder.php";
  
  class m_kategori{

    protected $conn;
    protected $log_agent;
    protected $act = "manipulasi kategori";

    public function __construct(){
      $this->log_agent = new logs_gate();
      $database = new m_connection();
      $this->conn = $database->conn;
    }

    public function get_data(){
      
      $sql = " SELECT * FROM kategori";
      $query = mysqli_query($this->conn, $sql);
      
      if($query->num_rows > 0){
        while($row = mysqli_fetch_object($query)){
          $result[] = $row;
        }
        return $result;

      }else{
        echo "ga ada data";
      }
    }

    public function get_data_by_id($id_kategori){

      $sql = " SELECT * FROM kategori WHERE id_kategori = $id_kategori ";
      $query = mysqli_query($this->conn, $sql);

      if($query->num_rows > 0){
        return mysqli_fetch_object($query);
      } else {
        echo "ga ada data";
      }
    }

    public function add_data($isi_kategori ){
      //cek duplikat
      $dupe_handler = "SELECT * FROM kategori WHERE isi_kategori = '$isi_kategori'";
      $query_dupe = mysqli_query($this->conn, $dupe_handler);
      if(mysqli_num_rows($query_dupe) > 0){
        header("Location: ../view/admin/a_kategori.php?error=dupe");
        exit();
      }
      
      //tambah data
      $sql = "INSERT INTO kategori (id_kategori, isi_kategori, waktu_upload) 
              VALUES (NULL, '$isi_kategori', NOW())";
      $query = mysqli_query($this->conn, $sql);
      if($query){
        session_start();
      $this->log_agent->log_state(
        $_SESSION['id'],
        $_SESSION['role'],
        "$this->act",
        mysqli_insert_id($this->conn),
        "Menambah kategori: $isi_kategori"
        );

        echo "<script>alert('data berhasil ditambah');  window.location='../view/admin/a_kategori.php';</script>";
      } else {
        echo "<script>alert('Data gagal ditambah'); window.location='../view/admin/a_kategori.php'</script>";
      }
    }

    public function delete_data($id_kategori){

      $sql = "DELETE FROM kategori WHERE id_kategori = $id_kategori";
      $query = mysqli_query($this->conn, $sql);

      
      if($query){
        session_start();
        $this->log_agent->log_state(
          $_SESSION['id'], 
          $_SESSION['role'], 
          "$this->act", 
          $id_kategori, 
          "menghapus kategori dengan id: $id_kategori"
        );
        echo "<script>alert('Data berhasil dihapus'); window.location='../view/admin/a_kategori.php'</script>";
      } else {
        echo "false";
      }
    }

    public function update_data($id_kategori, $isi_kategori) {

      $old_kategori = $this->get_data_by_id($id_kategori)->isi_kategori;

      $sql = "UPDATE kategori SET isi_kategori = '$isi_kategori' WHERE id_kategori = $id_kategori";
      $query = mysqli_query($this->conn, $sql);
      session_start();
      if ($query) {
        $this->log_agent->log_state(
          $_SESSION['id'], 
          $_SESSION['role'], 
          "$this->act", 
          $id_kategori, 
          "Memperbarui kategori dengan id: $id_kategori dari $old_kategori menjadi $isi_kategori"
        );
        echo "<script>alert('Data berhasil diperbarui'); window.location='../view/admin/a_kategori.php'</script>";
      } else {
        echo "<script>alert('Data gagal diperbarui'); window.location='../view/admin/a_kategori.php'</script>";
      }
    }
  }
?>