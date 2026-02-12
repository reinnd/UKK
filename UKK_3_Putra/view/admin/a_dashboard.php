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
            <section class="container grid">
                <div class="box dash">
                    <p>Selesai</p>
                    <div>100</div>
                </div>
                <div class="box dash">
                    <p>Diproses</p>
                    <div>100</div>
                </div>
                <div class="box dash">
                    <p>Menunggu</p>
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