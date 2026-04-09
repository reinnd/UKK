<?php
  include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
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
      <p>semua aspirasi  <span><button class="filter"></button></span></p>
      
      <div class="flex" style="overflow-x:scroll;">
        <table class="flex-grow">
          <thead>
            <tr>
              <th>No</th>
              <th>Topik</th>
              <th>Dari</th>
              <th>Kategori</th>
              <th>Isi</th>
              <th>Status</th>
              <th>Tanggal</th>
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
              <td><?= $result->status ?></td>
              <td><?= date( "j M Y" ,strtotime($result->waktu_upload)) ?></td>
              <?php 
                if($result->status == 'selesai') { ?>
                  <td><a class="edit" href="a_balas.php?id=<?= $result->id_aspirasi ?>">Lihat balasan</a></td>
              <?php } elseif($result->status == 'proses') { ?>
                  <td><a class="edit" href="a_balas.php?id=<?= $result->id_aspirasi ?>">Selesaikan</a></td>
              <?php } else { ?>
                  <td><a class="edit" href="a_balas.php?id=<?= $result->id_aspirasi ?>">Proses</a></td>
              <?php } ?>
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