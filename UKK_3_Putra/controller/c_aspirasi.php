<?php

include_once __DIR__ . "../../model/m_aspirasi.php";

$aspirasi = new m_aspirasi();

try{
  //cek apakah minta aksi
  if(!empty($_GET['action'])){
    
    //cek apakah << T I D A K >> minta delete
    if($_GET['action'] != 'delete'){

      if($_GET['action'] == 'edit'){
        $id_aspirasi = $_GET['id'];
        $data = $aspirasi->get_data_by_id($id);

        header("Location: ../view/user/u_form-edit-aspirasi.php?id_aspirasi=$id_aspirasi");
      } else {
        
      $_SERVER['REQUEST_METHOD'] = $_POST;
        $id_aspirasi   = $_POST['id_aspirasi'];
        $judul          = $_POST['judul'];
        $id_siswa       = $_POST['id_siswa'];
        $isi_aspirasi   = $_POST['isi_aspirasi'];
        $id_kategori    = $_POST['kategori'];

        if($_GET['action'] == 'add'){
        $aspirasi->add_data($judul, $id_siswa, $isi_aspirasi, $id_kategori);

      } elseif($_GET['action'] == 'update'){
        $aspirasi->update_data($id_aspirasi, $judul, $id_siswa, $isi_aspirasi, $id_kategori);
      }
      }


      
        
    } else{
      
    }
  } else{
    $data = $aspirasi->get_data();
  }
} catch(Exception $e) {
   echo $e->getMessage();
}
?>