<?php
  include_once "m_connection.php";
  
  class m_category{
    
    function get_data(){
      $conn = new m_connection();
      
      $sql = " SELECT * FROM kategori";
      $query = mysqli_query($conn->conn, $sql);
      
      if($query->num_rows > 0){
        while($row = mysqli_fetch_object($query)){
          $result[] = $row;
        }
        return $result;
      }else{
        echo "ga ada data";
      }
    }

    function get_data_by_id($id_kategori){
      $conn = new m_connection();

      $sql = " SELECT * FROM kategori WHERE id_kategori = $id_kategori ";
      $query = mysqli_query($conn->conn, $sql);
    }

    function add_data($isi_kategori ){
      $conn = new m_connection();
      
      //value id null, karena auto increment
      $sql = "INSERT INTO kategori (id_kategori, isi_kategori, waktu_upload) 
              VALUES (NULL, '$isi_kategori', NOW())";
      $query = mysqli_query($conn->conn, $sql);

      if($query){
        echo "<script>alert('Data berhasil ditambah'); window.location='../view/admin/a_category.php'</script>";
      } else {
        echo "false";
      }
    }

    function delete_data($id_kategori){
      $conn = new m_connection();

      $sql = "DELETE FROM kategori WHERE id_kategori = $id_kategori";
      $query = mysqli_query($conn->conn, $sql);

      if($query){
        echo "<script>alert('Data berhasil dihapus'); window.location='../view/admin/a_category.php'</script>";
      } else {
        echo "false";
      }
    }

    function update_data($id_kategori, $isi_kategori) {
      $conn = new m_connection();

      $sql = "UPDATE kategori SET id_kategori = $id_kategori, isi_kategori = '$isi_kategori' WHERE id_kategori = $id_kategori";
      $query = mysqli_query($conn->conn, $sql);

      if ($query) {
        # code...
      } else {

      }
    }
  }
?>