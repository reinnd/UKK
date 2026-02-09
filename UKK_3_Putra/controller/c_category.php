<?php
  include_once __DIR__ . "../../model/m_category.php";
  
  $category = new m_category();

  try {
    if(!empty($_GET['action'])){

      if($_GET['action'] != "delete" ) {

        $_SERVER["REQUEST_METHOD"] = $_POST;

        $id_kategori = $_POST['id_kategori'];
        $isi_kategori = $_POST['isi_kategori'];

        if($_GET['action'] == "add" ) {
          $category->add_data($isi_kategori);

        } elseif ($_GET['action'] == "update" ){
          $category->update_data($id_kategori, $isi_kategori);

        }

      } else {
        $category->delete_data($id_kategori);
      }
    } else {
      $data = $category->get_data();
    }
  } catch (Exception $e) {
    $e->getMessage();
  }
  
?>