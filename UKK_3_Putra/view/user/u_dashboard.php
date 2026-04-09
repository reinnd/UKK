<?php

include_once "../../controller/c_auth.php";

use App\c_auth\guard;
guard::notlogedin();
include_once "../../controller/c_aspirasi.php";

$db = new m_aspirasi();
$total_data = $db->count_by_user_id($_SESSION['id']);
$total_data_status1 = $db->count_by_user_id($_SESSION['id'], "selesai");
$total_data_status2 = $db->count_by_user_id($_SESSION['id'], "proses");
$total_data_status3 = $db->count_by_user_id($_SESSION['id'], "menunggu");
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
    <section class="container grid grid-template-default">
        <div class="box dash selesai-aspirasi">
            <p>Selesai</p>
            <div><?= $total_data_status1->total_aspirasi ?></div>
        </div>
        <div class="box dash diproses-aspirasi">
            <p>Diproses</p>
            <div><?= $total_data_status2->total_aspirasi ?></div>
        </div>
        <div class="box dash menunggu-aspirasi">
            <p>Menunggu</p>
            <div><?= $total_data_status3->total_aspirasi ?></div>
        </div>
        <div class="box dash total-aspirasi">
            <p>Total</p>
            <div><?= $total_data->total_aspirasi ?></div>
        </div>
    </section>
    <section class="container">
        <h4 style="margin-bottom: 5px;">Baru dibuat</h4>
        <div class="flex overflow-x">
            <table class="flex-grow">
                <thead>
                    <th>no</th>
                    <th>topik</th>
                    <th>Milik</th>
                    <th>balasan</th>
                    <th>status</th>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user_data as $result) {
                        ?>
                        <tr>
                            <td class="table-number"><?= $no++ ?></td>
                            <td><?= $result->judul ?></td>
                            <td title="<?= $result->username ?>">Saya</td>
                            <td><?= $result->isi_feedback ?></td>
                            <td><?= $result->status ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <ul class="pagination">
            <li><a class="disabled" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a class="disabled" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
        </ul>
    </section>
    <!-- footer & closing -->
    <?php
    include("../html/footer.php");
    ?>