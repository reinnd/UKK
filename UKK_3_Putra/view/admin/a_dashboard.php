<?php

    // include_once "../../controller/c_auth.php";
    // include_once "../../controller/c_adminonly.php";
    include_once "../../controller/c_aspirasi.php";
    //head
    $active_page = 'dashboard';
    include "../html/header.php";
?>
    <title>Dashboard</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "../html/navbar.php";
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
                <h4 style="margin-bottom: 5px;">terbaru</h4>
            <div class="flex ">
                <table class="flex-grow">
                    <thead>
                        <th>no</th>
                        <th>topik</th>
                        <th>dari</th>
                        <th>balasan</th>
                        <th>status</th>
                    </thead>
                    <tbody>
                    <?php 
                        $no = 1;
                        foreach ($data as $result){
                        ?>
                        <tr>
                        <td class="table-number"><?= $no++ ?></td>
                        <td><?= $result->judul ?></td>
                        <td><?= $result->username ?></td>
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
                    <li><a class="disabled" href="#">&laquo;</a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a class="disabled" href="#">&raquo;</a></li>
                </ul>
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>