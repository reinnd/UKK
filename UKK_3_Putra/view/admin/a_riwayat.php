<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
    //head
    $active_page = 'history';
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
                belum ada riwayat
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>