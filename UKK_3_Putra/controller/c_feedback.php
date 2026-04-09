<?php 
    include_once __DIR__ . "../../model/m_feedback.php";

    $feedback = new m_feedback();

    try{
        if(!empty($_GET['action'])) {
            if($_GET['action'] !== "delete") {

                $isi_feedback = $_POST['isi_feedback'];
                $id_admin = $_POST['id_admin'];
                $id_aspirasi = $_POST['id_aspirasi'];

                if($_GET['action'] == 'add') {
                    
                    $feedback->add_data($isi_feedback, $id_admin, $id_aspirasi);
                } elseif($_GET['action'] == 'update') {
                    $isi_feedback2 = $isi_feedback;
                    $id_admin2 = $id_admin;
                    $id_feedback = $_POST['id_feedback'];
                    $feedback->update_data($isi_feedback2, $id_admin2, $id_feedback, $id_aspirasi);
                }
            } else {

            }
        } else {

        }
    } catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
?>