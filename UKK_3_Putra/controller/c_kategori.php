<?php
  include_once __DIR__ . "../../model/m_kategori.php";
  
  $kategori = new m_kategori();

  try {
    if(!empty($_GET['action'])){

      if($_GET['action'] != "delete" ) {

        if($_GET['action'] == 'edit'){

          $id_kategori = $_GET['id_kategori'];
          $data = $kategori->get_data_by_id($id_kategori);

          include_once '../view/admin/a_kategori-edit.php';
        } else{

            $_SERVER["REQUEST_METHOD"] = $_POST;

          $id_kategori = $_POST['id_kategori'];
          $isi_kategori = $_POST['isi_kategori'];

          if($_GET['action'] == "add" ) {
            $kategori->add_data($isi_kategori);

          } elseif ($_GET['action'] == "update" ){
            $kategori->update_data($id_kategori, $isi_kategori);

          }
        }

      } else {
        $id_kategori = $_GET['id_kategori']; 
        $kategori->delete_data($id_kategori);
      }
    } else {
      $data = $kategori->get_data();
    }
  } catch (Exception $e) {
    $e->getMessage();
  }
  
?>