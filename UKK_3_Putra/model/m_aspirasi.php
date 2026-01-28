<?php 

include "m_connection.php";

class m_aspirasi{
  
  function get_data() {
    //jalur koneksi
    $conn = new m_connection();
    
    //query tabel aspirasi
    $sql = "SELECT aspirasi.*, kategori.isi_kategori, siswa.username, feedback.isi_feedback
            FROM aspirasi
            INNER JOIN kategori ON aspirasi.id_kategori = kategori.id_kategori
            INNER JOIN siswa ON aspirasi.id_siswa = siswa.id_siswa
            INNER JOIN feedback ON aspirasi.id_feedback = feedback.id_feedback";
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
}

?>