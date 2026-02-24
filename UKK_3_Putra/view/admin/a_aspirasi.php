<?php
  include_once "../../controller/c_aspirasi.php";
  include "a_header.php";
?>
  <title>Aspirasi</title>
</head>
<body>
  <?php 
    include "a_navbar.php";
  ?>

  <div class="container">
    <p>akses cepat</p>
    <a class="box" href="a_form-tambah-aspirasi.php">Tambah</a>
    <div class="box">Edit</div>
    <div class="box"></div>
  </div>

  <div class="container">
      <p>semua aspirasi</p>
      <div class="table-flow">
        <table>
          <thead>
            <tr>
              <th>no</th>
              <th>topik</th>
              <th>dari</th>
              <th>kategori</th>
              <th>isi</th>
              <th rowspan="2">balasan</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no = 1;
            foreach ($data as $result){
            ?>
            <tr>
              <td class="table-number"><?= $no++ ?></td>
              <td><?= $result->judul ?></td>
              <td><?= $result->username ?></td>
              <td><?= $result->isi_kategori ?></td>
              <td><?= $result->isi_aspirasi ?></td>
              <td><?= $result->isi_feedback ?></td>
              <td><a href="a_feedback.php?id=<?= $result->id_aspirasi ?>">ini tombol</a></td>
            </tr>
            <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
    include "a_footer.php";
  ?>
</body>
</html>


