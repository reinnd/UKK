<?php
include_once "../../controller/c_auth.php";

use App\c_auth\guard;
guard::soadmin();

include_once "../../model/m_aspirasi.php";
$db = new m_aspirasi();
$data_aspirasi = $db->get_data_by_id($_GET['id']);
//head
$active_page = 'feedback';
include "../html/header.php";
?>
<link rel="stylesheet" href="../asset/style/form.css?v=1">
<title>Feedback</title>
</head>

<body>
    <!-- header & navigation -->
    <?php
    include "../html/navbar.php";
    ?>
    <!-- main start here -->

    <section class="container form-container">
        <h2 style="margin-bottom: 1.5rem; font-weight: 700;">Balas aspirasi</h2>

        <form action="../../controller/c_aspirasi.php?action=" method="POST">
            <div class="form-group flex">
                <input type="text" id="judul" name="judul" class="form-control disabled"
                    value="<?= $data_aspirasi->username ?>" disabled>
                <input type="text" id="judul" name="judul" class="form-control disabled"
                    value="<?= $data_aspirasi->waktu_upload ?>" disabled>
                <label for="judul">Topik</label>
                <input type="text" id="judul" name="judul" class="form-control disabled"
                    value="<?= $data_aspirasi->judul ?>" disabled>
            </div>
            <div class="form-group flex">
                <label for="judul">Kategori</label>
                <input type="text" id="judul" name="judul" class="form-control disabled"
                    value="<?= $data_aspirasi->isi_kategori ?>" disabled>
            </div>

            <div class="form-group flex">
                <label for="isi_aspirasi">Detail</label>
                <div id="isi_aspirasi" name="isi_aspirasi" class="form-control"><?= $data_aspirasi->isi_aspirasi ?>
                </div>
            </div>

            <input type="number" id="id_siswa" name="id_siswa" value="<?= $_SESSION['id'] ?>" class="form-control"
                hidden>

            <input type="text" id="judul" name="judul" class="form-control disabled"
                value="<?= $data_aspirasi->status ?>" disabled>

            <input type="text" id="judul" name="judul" class="form-control disabled" value=""
                placeholder="Tulis balasan..">

            <button type="submit" class="btn-form">Balas</button>
        </form>
    </section>
    <!-- footer & closing -->
    <?php
    include "../html/footer.php";
    ?>