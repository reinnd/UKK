<?php

include "../../controller/c_aspirasi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/style.css?v=2.4">
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
                  <th>balasan</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $no = 1;
                foreach ($data as $result){
                ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $result->judul ?></td>
                  <td><?= $result->username ?></td>
                  <td><?= $result->isi_kategori ?></td>
                  <td><?= $result->isi_aspirasi ?></td>
                  <td><?= $result->isi_feedback ?></td>
                </tr>
                <?php 
                }
                ?>
              </tbody>
            </table>
            </div>
        </main>
    </div>
    
    <footer>
        <h6>Bottom Text</h6>
    </footer>
    
</body>
</html>


