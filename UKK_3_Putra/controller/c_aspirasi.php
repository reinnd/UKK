<?php

include_once __DIR__ . "../../model/m_aspirasi.php";

$aspirasi = new m_aspirasi();

try{
  //cek apakah minta aksi
  if(!empty($_GET['action'])){
    
    //cek apakah << T I D A K >> minta delete
    if($_GET['action'] != 'delete'){

      $_SERVER['REQUEST_METHOD'] = $_POST;

        $judul          = $_POST['judul'];
        $id_siswa       = $_POST['id_siswa'];
        $isi_aspirasi   = $_POST['isi_aspirasi'];
        $status         = $_POST['status'];
        $id_kategori    = $_POST['id_kategori'];
        $id_feedback    = $_POST['id_feedback'];


      if($_GET['action'] == 'add'){
        $aspirasi->add_data($judul, $id_siswa, $isi_aspirasi, $status, $id_kategori, $id_feedback);

      } elseif($_GET['action'] == 'update'){

      }
        
    } else{
      
    }
  } else{
    $total_data = $aspirasi->count_all();

    $status = "selesai";
    $total_data_status1 = $aspirasi->count_by_status($status);

    $status = "proses";
    $total_data_status2 = $aspirasi->count_by_status($status);

    $status = "menunggu";
    $total_data_status3 = $aspirasi->count_by_status($status);
    $data = $aspirasi->get_data();
  }
} catch(Exception $e) {
   echo $e->getMessage();
}

var_dump($data);
?>