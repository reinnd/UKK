<?php 
  include "../../controller/c_category.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Aspirasi</title>
    <link rel="stylesheet" href="../style/style.css?v=2.5">
    <link rel="stylesheet" href="../style/header.css?v=1">
</head>
<body>
    <header>
        <div class="tribar-container" id="tribar-container" onclick="">
          <div class="tribar"></div>
          <div class="tribar"></div>
          <div class="tribar"></div>
        </div>
        <h1>aspirasi</h1>
        <div class="profile">O</div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <p>Something</p>
            <button>dashboard</button>
            <div class="dropdown">
                <button>aspirasi</button>
                    <div class="content">
                        <a href="#">tambah aspirasi</a>
                        <a href="#">balas aspirasi</a>
                        <a href="#">bungkam</a>
                    </div>
            </div>
            
            <button>histori</button>
            <button>setting</button>
        </nav>
        <main>
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
        </main>
    </div>
</body>
</html>