<?php
    
    include_once "../../controller/c_user.php";
    //head
    $active_page = 'anggota';
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
            <div class="container">
                <div class="box">tambah siswa</div>
                <div class="box">tambah admin</div>
            </div>
            <div class="container" style="display: block;"> 
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Waktu Gabung</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php 
                    $no= 1;
                    foreach ($data as $result) { ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $this->nama ?></td>
                            <td> <?= $this->role ?></td>
                            <td> <?= $this->status ?></td>
                            <td> <?= $this->waktu ?></td>
                            <td>
                                <button class="balas">ubah status</button>
                                <button class="delete">hapus anggota</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <section class="container grid grid-template-default">
                belum ada anggota
        </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>