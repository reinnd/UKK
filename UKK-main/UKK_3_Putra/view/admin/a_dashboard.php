<?php

    //head
    $active_page = 'dashboard';
    include "a_header.php";
?>
    <title>Dashboard</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "a_navbar.php";
?>
<!-- main start here -->
            <section class="container grid grid-template-default">
                <div class="box dash selesai-aspirasi">
                    <p>Selesai</p>
                    <div>100</div>
                </div>
                <div class="box dash diproses-aspirasi">
                    <p>Diproses</p>
                    <div>100</div>
                </div>
                <div class="box dash menunggu-aspirasi">
                    <p>Menunggu</p>
                    <div>100</div>
                </div>
                <div class="box dash total-aspirasi">
                    <p>Total</p>
                    <div>100</div>
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
    include "a_footer.php";
?>