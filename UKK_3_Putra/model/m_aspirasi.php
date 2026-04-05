<?php 

include_once "m_connection.php";

class m_aspirasi{
  
  protected $conn;
  public function __construct(){
    $database = new m_connection();
    $this->conn = $database->conn;
  }
  public function get_data() {
    //query tabel aspirasi
    $sql = "SELECT aspirasi.*, kategori.isi_kategori, siswa.username, feedback.isi_feedback
            FROM aspirasi
            INNER JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori
            INNER JOIN siswa ON aspirasi.id_siswa = siswa.id_siswa
            LEFT JOIN feedback ON aspirasi.id_feedback = feedback.id_feedback";
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

  public function get_data_by_id($id_aspirasi) {
    
    $sql = "SELECT aspirasi.*, kategori.isi_kategori, siswa.username, feedback.isi_feedback
            FROM aspirasi
            INNER JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori
            INNER JOIN siswa ON aspirasi.id_siswa = siswa.id_siswa
            LEFT JOIN feedback ON aspirasi.id_feedback = feedback.id_feedback
            WHERE aspirasi.id_aspirasi = '$id_aspirasi'";
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

  public function get_data_by_user_id($id_siswa) {
    $sql = "SELECT aspirasi.*, kategori.isi_kategori, siswa.username, feedback.isi_feedback
            FROM aspirasi
            INNER JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori
            INNER JOIN siswa ON aspirasi.id_siswa = siswa.id_siswa
            LEFT JOIN feedback ON aspirasi.id_feedback = feedback.id_feedback
            WHERE aspirasi.id_siswa = '$id_siswa'";
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
  
  public function add_data( $judul, $id_siswa, $isi_aspirasi, $id_kategori){
    
    $sql = "INSERT INTO aspirasi (id_aspirasi, judul, id_siswa, isi_aspirasi, `status`, id_kategori, id_feedback, waktu_upload) 
            VALUES (NULL,'$judul', $id_siswa, '$isi_aspirasi', 'menunggu', $id_kategori, 1, NOW() )";
    $query = mysqli_query($this->conn, $sql);
    
    if($query){
      echo "<script>alert('data berhasil ditambah');  window.location='../view/user/u_aspirasi.php';</script>";
    } else{
      echo "<script>alert('data gagal ditambah');  window.location='../view/admin/a_form.php';</script>";
    }
    
  }

  public function update_data($id_aspirasi, $judul, $id_siswa, $isi_aspirasi, $id_kategori){
    
    $sql = "UPDATE `aspirasi` SET 
            `judul` = '$judul', 
            `id_siswa` = $id_siswa, 
            `isi_aspirasi` = '$isi_aspirasi',  
            `id_kategori` = $id_kategori,
            WHERE `id_aspirasi` = $id_aspirasi";
    $query = mysqli_query($this->conn, $sql);
    
    if($query){
      echo "<script>alert('data berhasil diupdate');  window.location='../view/user/u_aspirasi.php';</script>";
    } else{
      echo "<script>alert('data gagal diupdate');  window.location='../view/admin/a_form.php';</script>";
    }
    
  }

  public function delete_data($id_aspirasi){
    
    $sql = "DELETE * FROM aspirasi WHERE id_aspirasi = $id_aspirasi";
    $query = mysqli_query($this->conn, $sql);
    if($query){
      echo "<script>alert('data dihapus');  window.location.href='../view/admin/a_form.php';</script>";
    }
  }


  //mist

  public function count_all(){
    
    $sql = "SELECT COUNT(*) AS total_aspirasi FROM aspirasi";
    $query = mysqli_query($this->conn, $sql);
    $data = mysqli_fetch_object($query);
    return $data;
  }

  public function count_by_status($status){
    
    $sql = "SELECT COUNT(*) AS total_aspirasi FROM aspirasi WHERE `status` = '$status'";
    $query = mysqli_query($this->conn, $sql);
    $data = mysqli_fetch_object($query);
    return $data;
  }

  public function count_by_user_id($id_siswa, $status = null){
    
    if(isset($status)){
      $sql = "SELECT COUNT(*) AS total_aspirasi FROM aspirasi WHERE id_siswa = '$id_siswa' AND `status` = '$status'";
    } else {
      $sql = "SELECT COUNT(*) AS total_aspirasi FROM aspirasi WHERE id_siswa = '$id_siswa'";
    }
    
    $query = mysqli_query($this->conn, $sql);
    $data = mysqli_fetch_object($query);
    return $data;
  }

  
}
