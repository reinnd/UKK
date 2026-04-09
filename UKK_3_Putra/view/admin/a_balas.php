<?php
include_once "../../controller/c_auth.php";

use App\c_auth\guard;
guard::soadmin();

include_once "../../model/m_aspirasi.php";
$db = new m_aspirasi();
$data_aspirasi = $db->get_data_by_id($_GET['id']);

include_once "../../model/m_feedback.php";
$db2 = new m_feedback();
$data_feedback = $db2->get_feedback_by_aspirasi($data_aspirasi->id_feedback);
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

    <section class="container form-container overflow-x">
        <h2 style="margin-bottom: 1.5rem; font-weight: 700;">Balas aspirasi</h2>

        <form id="fed-form" action="" method="POST">
            <div class=" flex">
                <div class="input-container"><?= $data_aspirasi->username ?></div>
                <div class="input-container"><?= $data_aspirasi->waktu_upload ?></div>
            </div>

            <div class="form-group flex">
                <label for="judul">Topik</label>
                <div class="input-container"><?= $data_aspirasi->judul ?></div>
            </div>
            
            <div class="form-group flex">
                <label for="judul">Kategori</label>
                <div class="input-container"><?= $data_aspirasi->isi_kategori ?></div>
            </div>

            <div class="form-group flex">
                <label>Detail</label>
                <div class="input-container"><?= $data_aspirasi->isi_aspirasi ?>
                </div>
            </div>

            <input type="number" id="id_siswa" name="id_siswa" value="<?= $_SESSION['id'] ?>" class="input-container"
                hidden>

            <div class="form-group flex" id="feed-prosc">
                <p>Diproses oleh: <b><?= $data_feedback->username1 ?></b></p>
                <div class="input-container"><?= $data_feedback->isi_feedback ?>
                </div>
            </div>

            <div class="form-group flex" id="feed-done">
                <p>Diselesaikan oleh: <b><?= $data_feedback->username2 ?></b></p>
                <div  class="input-container"><?= $data_feedback->isi_feedback2 ?>
                </div>
            </div>

            <div class="form-group flex">
                    <label for="status">Status</label>
                    <select id="status" name="status" class="input-container" required>
                        <option id="stat-before" value="<?= $data_aspirasi->status ?>" disabled selected><?= $data_aspirasi->status ?></option>
                        <?php if($data_aspirasi->status == 'proses') { ?>
                            <option value="selesai">Selesai</option>
                        <?php } else { ?>
                            <option value="proses">Proses</option>
                            <option value="selesai">Selesai</option>
                        <?php } ?>
                    </select>
            </div>

            <input type="number" value="<?= $data_aspirasi->id_feedback ?>" name="id_feedback" hidden>
            <input type="number" value="<?= $data_aspirasi->id_aspirasi ?>" name="id_aspirasi" hidden>
            <input type="number" value="<?= $_SESSION['id'] ?>" name="id_admin" hidden>

            <div class="form-group flex">
                    <label id="lbl-isi_feedback" for="isi_feedback">Balas aspirasi</label>
                    <textarea id="isi_feedback" name="isi_feedback" class="input-container" placeholder="Beri balasan..." required></textarea>
            </div>
            <?php 
                if($data_aspirasi->status == 'selesai') { ?>
                  <td><a class="btn-form" href="a_balas.php?id=<?= $data_aspirasi->id_aspirasi ?>">Kembali</a></td>
              <?php } elseif($data_aspirasi->status == 'proses') { ?>
                  <button type="submit" class="btn-form">Selesaikan aspirasi</button>
              <?php } else { ?>
                  <button type="submit" class="btn-form">Balas aspirasi</button>
              <?php } ?>
        </form>
    </section>
    <script>
        const fedForm = document.getElementById('fed-form');
        const statMod = document.getElementById('status');
        const statBefore = document.getElementById('stat-before');
        const fedVal = document.getElementById('isi_feedback');
        const fedLbl = document.getElementById('lbl-isi_feedback');
        const fedDone = document.getElementById('feed-done');
        const fedPrc = document.getElementById('feed-prosc');

        function setUrlFeedback(){
            if(statBefore.value === 'proses' && statMod.value === 'selesai'){
                fedForm.action = '../../controller/c_feedback.php?action=update';
            } else if(statBefore.value === 'menunggu' && statMod.value === 'proses' || statMod.value === 'selesai'){
                fedForm.action = '../../controller/c_feedback.php?action=add';
            } else {
                fedForm.action = '#';
            }
        }

        statMod.addEventListener('change', setUrlFeedback);
        setUrlFeedback();

        if(statBefore.value === 'selesai'){
            fedVal.hidden = true;
            fedLbl.style.display = 'none';
            fedPrc.style.display = "block";
        } else if(statBefore.value === 'proses'){
            fedDone.style.display = "none";
        } else {
            fedDone.style.display = "none";
            fedPrc.style.display = "none";
        }
    </script>
    <!-- footer & closing -->
    <?php
    include "../html/footer.php";
    ?>