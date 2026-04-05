<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
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
        <section class="container">
            <a href="a_anggota-tambah.php?type=secondary">
                <div class="box">tambah siswa</div>
            </a>
            <a href="a_anggota-tambah.php?type=primary">
                <div class="box">tambah admin</div>
            </a>
        </section>
        <section class="container" style="display: block;"> 
            
            <section class="flex" style="margin-bottom: 1rem; align-items: center;">
                <h2>Semua anggota</h2>
                <div class="box">
                    <p>filter</p>
                    <div class="flex">
                        <div>Semua</div>
                        <div>Siswa</div>
                        <div>Admin</div>
                    </div>
                </div>
                <div class="box">
                    <p>Sorts by</p>
                    <div class="flex">
                        <div>A-Z</div>
                        <div>Z-A</div>
                        <div>Terbaru</div>
                        <div>Terlama</div>
                    </div>
                </div>
            </section>
            <div class="flex overflow-x">
                <table class="flex-grow">
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
                    foreach ($get_all as $result) { ?>
                        <tr>
                            <td> <?= $no++ ?></td>
                            <td> <?= $result->username ?></td>
                            <td> <?= $result->role ?></td>
                            <td> <?= $result->status_akun ?></td>
                            <td> <?= date( "Y F d" , strtotime($result->waktu_buat)) ?></td>
                            <td style="display: flex; justify-content: center; gap: 5px;">
                                <button class="edit">ubah status</button>
                                <button class="delete">hapus anggota</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>

    <script>
        const dat
    </script>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>