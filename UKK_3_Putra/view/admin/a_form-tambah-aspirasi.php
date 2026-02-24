<?php
    include "../../controller/c_category.php";
    //head
    $active_page = 'add-aspiration';
    include "a_header.php";
?>
    <title>Buat Aspirasimu</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "a_navbar.php";
?>
<!-- main start here -->
  <div class="container">
    <form action="../../controller/c_aspirasi.php?action=add" method="post">
      <div class="box">
        <label for="jusuk">Topik</label>
        <input type="text" name="judul" placeholder="Bla bla..">
      </div>

      <?php
        foreach ($data as $result) {
        
      ?>

      <div class="box">
        <label for="id_kategori"><?= $result->isi_kategori ?></label>
        <input type="radio" name="id_kategori" value="<?= $result->id_kategori ?>">
      </div>

      <?php
        }
      ?>

      <div class="box">
        <label for="isi_aspirasi">Isi</label>
        <textarea name="isi_aspirasi" placeholder="Bla bla.."> </textarea>
      </div>
      <!-- pengirim -->
       <input type="number" name="id_siswa" value="1">
      <!-- status -->
       <input type="text" name="status" value="menunggu">
      <!-- feedback -->
       <input type="number" name="id_feedback" value="1">
      <button type="submit">kirim</button>
    </form>
  </div>
<!-- footer & closing -->
<?php
    include "a_footer.php";
?>