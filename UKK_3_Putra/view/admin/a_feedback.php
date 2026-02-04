<?php

    include "../../controller/c_aspirasi.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>tentang</th>
                <th>dari</th>
                <th>kategori</th>
                
                <th>balasan</th>
            </tr>
        </thead>

        <tbody>
            <tr>
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
                  <td><button>balas</button></td>
                </tr>
                <?php 
                }
                ?>
            </tr>
        </tbody>
    </table>
</body>
</html>