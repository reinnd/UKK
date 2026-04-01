<?php
  include_once "../../controller/c_aspirasi.php";
  include "u_header.php";
?>
  <title>Aspirasi</title>
</head>
<body>
  <?php 
    include "u_navbar.php";
  ?>

  <div class="container">
    <p>akses cepat</p>
    <a class="box" href="u_form-tambah-aspirasi.php">Tambah</a>
    <div class="box">Edit</div>
    <div class="box">Hapus</div>
  </div>

  <div class="container">
      <p>aspirasi saya</p>
      <div class="table-flow">
        <table>
          <thead>
            <tr>
              <th>no</th>
              <th>topik</th>
              <th>dari</th>
              <th>kategori</th>
              <th>isi</th>
              <th>balasan</th>
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
            <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
    include "u_footer.php";
  ?>
</body>
</html>


