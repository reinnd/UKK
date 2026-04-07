<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::notlogedin();
    include_once "../../controller/c_aspirasi.php";
        $db = new m_aspirasi();
        $user_data = $db->get_data_by_user_id($_SESSION['id']);
    //head
    include("../html/header.php");
?>
    <title>Dashboard</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include("../html/navbar.php");
?>
<!-- main start here -->
            <section class="container">
                <div class="box">
                    <a href="u_form-tambah-aspirasi.php">Tambah aspirasi baru</a>
                </div>
            </section>
            <section class="container">
                <div class="overflow-x flex">
                    <table class="flex-grow">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Dari</th>
                                <th>Tentang</th>
                                <th>Waktu Upload</th>
                                <th>status</th>
                                <th>balasan</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($user_data as $result){
                            ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $result->username ?></td>
                                    <td><?= $result->judul ?></td>
                                    <td><?= $result->waktu_upload ?></td>
                                    <td id="stat"><?= $result->status ?></td>
                                    <td><?= $result->isi_feedback ?></td>
                                    <td>
                                        <?php 
                                        if($result->status !== "menunggu"){
                                        ?>
                                            <a id="edt" class="edit">notedit</a>
                                            <a id="del" class="delete">nothapus</a>
                                        <?php } else { ?>
                                            <a href="u_form-edit-aspirasi.php?&id=<?= $result->id_aspirasi ?>" id="edt" class="edit">edit</a>
                                            <a href="../../controller/c_aspirasi.php?action=delete&id=<?= $result->id_aspirasi ?>" id="del" class="delete">hapus</a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php 
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
<!-- footer & closing -->
<?php
    include("../html/footer.php");
?>