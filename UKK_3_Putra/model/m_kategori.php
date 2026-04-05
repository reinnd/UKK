<?php
  include_once "m_connection.php";
  
  class m_kategori{

    protected $conn;

    public function __construct(){
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
        while($row = mysqli_fetch_object($query)){
          $result[] = $row;
        }
        return $result;
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
        echo "<script>alert('Data berhasil ditambah'); window.location='../view/admin/a_kategori.php'</script>";
      } else {
        echo "<script>alert('Data gagal ditambah'); window.location='../view/admin/a_kategori.php'</script>";
      }
    }

    public function delete_data($id_kategori){

      $sql = "DELETE FROM kategori WHERE id_kategori = $id_kategori";
      $query = mysqli_query($this->conn, $sql);

      if($query){
        echo "<script>alert('Data berhasil dihapus'); window.location='../view/admin/a_kategori.php'</script>";
      } else {
        echo "false";
      }
    }

    public function update_data($id_kategori, $isi_kategori) {

      $sql = "UPDATE kategori SET isi_kategori = '$isi_kategori' WHERE id_kategori = $id_kategori";
      $query = mysqli_query($this->conn, $sql);

      if ($query) {
        echo "<script>alert('Data berhasil diperbarui'); window.location='../view/admin/a_kategori.php'</script>";
      } else {
        echo "<script>alert('Data gagal diperbarui'); window.location='../view/admin/a_kategori.php'</script>";
      }
    }
  }
?>