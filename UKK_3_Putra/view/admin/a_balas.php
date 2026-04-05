<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
    include_once "../../model/m_aspirasi.php";
    //head
    $active_page = 'feedback';
    include "../html/header.php";
?>
    <title>Feedback</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "../html/navbar.php";

    $db = new m_aspirasi();
    $a = $db->get_data_by_id(1);
    // var_dump($a);
    // echo "         ";

    // $cv = $_GET['id_aspirasi'];
    // echo $cv;
    

?>
<!-- main start here -->
            
    <section>
        <form action="" method="POST">
            <?php foreach ($a as $result) { ?>
            <input type="text" value=<?= "$result->username" ?>>
            <input type="text" value=<?= "$result->isi_aspirasi" ?>>
            <input type="text" value=<?= "$result->judul" ?>>
            <input type="text" value=<?= "$result->status" ?>>
            <input type="text" value=<?= "$result->status" ?>>
            <input type="text" value=<?= "$result->status" ?>>
            <?php } ?>
        </form>
    </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>