<?php
  include_once "../../controller/c_aspirasi.php";
  include "../html/header.php";
?>
  <title>Aspirasi</title>
</head>
<body>
  <?php 
    include "../html/navbar.php";
  ?>


  <div class="container">
      <p>semua aspirasi  <span><button class="filter">🔍</button></span></p>
      
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
              <th>status</th>
              <th></th>
              <th></th>
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
              <td><?= $result->status ?></td>
              <td><a class="balas" href="a_feedback.php?id=<?= $result->id_aspirasi ?>">Balas</a></td>
              <td><a class="balas" href="a_feedback.php?id=<?= $result->id_aspirasi ?>">Status</a></td>
            </tr>
            <?php 
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
    include "../html/footer.php";
  ?>
</body>
</html>


