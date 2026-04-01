<?php 

include_once "m_connection.php";

class m_aspirasi{
  
  function get_data() {
    //jalur koneksi
    $conn = new m_connection();
    
    //query tabel aspirasi
    $sql = "SELECT aspirasi.*, kategori.isi_kategori, siswa.username, feedback.isi_feedback
            FROM aspirasi
            INNER JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori
            INNER JOIN siswa ON aspirasi.id_siswa = siswa.id_siswa
            LEFT JOIN feedback ON aspirasi.id_feedback = feedback.id_feedback";
    $query = mysqli_query($conn->conn, $sql);
    
    if ($query->num_rows > 0) {
      while($data = mysqli_fetch_object($query)){
        $result[] = $data;
      }
      return $result;
      } else {
        echo "ga ada data";
    }
  }

    function get_data_by_id($id) {
      
    }

    function get_data_by_user_id($id_siswa) {
      
    }
    
    function add_data( $judul, $id_siswa, $isi_aspirasi, $status, $id_kategori, $id_feedback){
      
      $conn = new m_connection();
      $sql = "INSERT INTO aspirasi (id_aspirasi, judul, id_siswa, isi_aspirasi, `status`, id_kategori, id_feedback, waktu_upload) 
              VALUES (NULL,'$judul', $id_siswa, '$isi_aspirasi', '$status', $id_kategori, $id_feedback, NOW() )";
      $query = mysqli_query($conn->conn, $sql);
      
      if($query){
        echo "<script>alert('data berhasil ditambah');  window.location='../view/user/u_aspirasi.php';</script>";
      } else{
        echo "<script>alert('data gagal ditambah');  window.location='../view/admin/a_form.php';</script>";
      }
      
    }

   function delete_data($id_aspirasi){
     $conn = new m_connection();
     $sql = "DELETE * FROM aspirasi WHERE id_aspirasi = $id_aspirasi";
     $query = mysqli_query($conn->conn, $sql);
     if($query){
       echo "<script>alert('data dihapus');  window.location.href='../view/admin/a_form.php';</script>";
     }
   }
  
}

?>