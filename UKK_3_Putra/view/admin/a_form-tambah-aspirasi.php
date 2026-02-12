<?php

    //head
    $active_page = 'add-aspiration';
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
          <div class="wrapper flex-input-container">
        <form action="../../controller/c_aspirasi.php?action=add" method="post">
        
                <!-- id -->
                <input type="number" id="id" name="id" hidden>
              <div class="flex-wrapper">
                <label for="judul_aspirasi">judul</label>
                <input type="text" id="judul_aspirasi" name="judul_aspirasi">
              </div>

                <!-- current user by id -->
                <input type="number" id="id_user" name="id_user" value="1" hidden>
                
              <div class="flex-wrapper">
                <label for="isi_aspirasi">isi</label>
                <input type="text" id="isi_aspirasi" name="isi_aspirasi">
              </div>

                <input type="number" name="status" id="status" hidden>

                <!-- pilihan -->
              <div class="flex-wrapper" for="kategori">
                <label for="kategori">kategori</label>
                <?php
                  foreach($data as $result){
                ?>
              <div class="another-flex-wrapper">
                <label>
                  <input type="radio" id="id_kategori" name="kategori" value="<?= $result->id_kategori ?> ">
                <?= $result->isi_kategori ?></label>
              </div>
                <?php 
                  }
                ?>
              </div>

                <input type="number" id="id_feedback" value="1" hidden>

                <button type="submit">kirim</button>
            </form>
            </div>
        <!-- footer & closing -->
<?php
    include "a_footer.php";
?>