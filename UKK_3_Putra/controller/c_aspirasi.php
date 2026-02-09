<?php

include_once __DIR__ . "../../model/m_aspirasi.php";

$aspirasi = new m_aspirasi();

try{
  //cek apakah minta tampil data
  if(!empty($_GET['action'])){
    //hapus atau tidak
    if(!$_GET['action'] == 'delete'){
      //kalau bukan hapus, ambil variabel aspirasi
      if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $id = $_POST['id'];
        $judul_aspirasi = $_POST['judul'];
        $id_siswa = $_POST['id_siswa'];
        $isi_aspirasi = $_POST['isi_aspirasi'];
        $status = $_POST['status'];
        $id_kategori = $_POST['id_kategori'];
        $id_feedback = $_POST['id_feedback'];
        
        
        if($_GET['action'] == 'add'){
          //tambah data
          $aspirasi->add_data($id, $judul_aspirasi, $id_siswa, $isi_aspirasi, $status, $id_kategori, $id_feedback);
          
        }elseif($_GET['action'] == 'update'){
        
        }
      }
    } 
  }else{
    $data = $aspirasi->get_data();
  }
} catch(Exception $e) {
   echo $e->getMessage();
}


?>