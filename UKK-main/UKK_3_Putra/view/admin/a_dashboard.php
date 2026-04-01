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
                    <div><?= $total_data_status->total_aspirasi ?></div>
                </div>
                <div class="box dash diproses-aspirasi">
                    <p>Diproses</p>
                    <div><?= $total_data_status->total_aspirasi ?></div>
                </div>
                <div class="box dash menunggu-aspirasi">
                    <p>Menunggu</p>
                    <div><?= $total_data_status->total_aspirasi ?></div>
                </div>
                <div class="box dash total-aspirasi">
                    <p>Total</p>
                    <div> <?= $total_data->total_aspirasi ?> </div>
                </div>
            </section>
            <section>
                <table>
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>