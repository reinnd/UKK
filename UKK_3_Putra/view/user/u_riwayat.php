<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::notlogedin();
    include_once "../../model/m_logshanlder.php";
    $db = new logs_gate();
    $user_logs = $db->get_data_by_user_id($_SESSION['id'], $_SESSION['role']);
    include_once "../../controller/c_auth.php";
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
                <div class="overflow-x flex">
                    <table class="flex-grow">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th></th>
                                <th>Role</th>
                                <th>Aksi</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no = 1;
                        foreach($user_logs as $result){
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $result->username ?></td>
                                <td><?= $result->role ?></td>
                                <td><?= $result->aksi ?></td>
                                <td><?= $result->detail ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>