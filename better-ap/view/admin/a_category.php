<?php 
    include "../../controller/c_category.php";
    include "a_header.php";
    $active_page = "category";
?>
    <title>Semua Kategori</title>
</head>
<body>
<?php 
    include "a_navbar.php";
?>
    <div class="">
        <div class="container">
            <p>tambah kategori baru</p>
            <form action="../../controller/c_category.php?action=add" method="post">
                <input type="number" name="id_kategori" hidden>

                <input type="text" name="isi_kategori" placeholder="kategori baru..">
                <button type="submit">kirim</button>
            </form>
        </div>

        <!-- <div class="container">
            <p>Edit</p>
            <form action="../../controller/c_category.php?action=update" method="post">
                <input type="number" name="id_kategori" value="<?= $id_kategori = $_GET['id_kategori']; $data->$id ?>">

                <input type="text" name="isi_kategori" placeholder="kategori baru..">
                <button type="submit">kirim</button>
            </form>
        </div> -->

        <div class="container">
            <div class="flex">
            <table class="flex-grow">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>kategori</th>
                        <!-- <th>dipakai</th> -->
                        <th rowspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $no = 1;
                        foreach($data as $result){
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td style="text-align: center;"><?= $result->isi_kategori ?></td>
                        <!-- <td>belum ada data</td> -->
                        <td style="text-align: right;">
                            <a class="edit" href="../../controller/c_category.php?action=edit&id_kategori=<?= $result->id_kategori ?>">&#9998;</a>
                            <!-- <button><a href="?action=id_kategori=<?= $result->id_kategori ?>">&#9998;</a></button> -->
                            <a class="delete" href="../../controller/c_category.php?action=delete&id_kategori=<?= $result->id_kategori ?>" onclick="return confirm('Yakin hapus kategori ini?')">&#10006;</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>

<?php 
    include "a_footer.php";
?>
</body>
</html>
