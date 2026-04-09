<?php
include_once "../../controller/c_auth.php";

use App\c_auth\guard;
guard::soadmin();

include_once "../../controller/c_kategori.php";
$active_page = "kategori";
include "../html/header.php";
?>
<script src="../asset/js/errorHandler.js?v=1"></script>
<title>Semua Kategori</title>
</head>

<body>
    <?php
    include "../html/navbar.php";
    ?>
    <div class="">
        <div class="container">
            <p>tambah kategori baru</p>
            <form action="../../controller/c_kategori.php?action=add" method="post">
                <input type="number" name="id_kategori" hidden>

                <input type="text" name="isi_kategori" placeholder="kategori baru..">
                <button type="submit">kirim</button>
            </form>
        </div>

        <!-- <div class="container">
            <p>Edit</p>
            <form action="../../controller/c_kategori.php?action=update" method="post">
                <input type="number" name="id_kategori" value="<?= $id_kategori = $_GET['id_kategori'];
                $data->$id ?>">

                <input type="text" name="isi_kategori" placeholder="kategori baru..">
                <button type="submit">kirim</button>
            </form>
        </div> -->

        <section class="container">
            <div class="overflow-x flex">
                <table class="flex-grow">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($all_kategori as $result) {
                            ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $result->isi_kategori ?></td>
                                <td>
                                    <button class="edit"><a style="color:;"
                                            href="a_kategori-edit.php?id_kategori=<?= $result->id_kategori ?>"><i
                                                class="fa-solid fa-pen-to-square"></i></a></button>
                                    <button class="delete"><a style="color:black;"
                                            href="../../controller/c_kategori.php?action=delete&id_kategori=<?= $result->id_kategori ?>"
                                            onclick="return confirm('Yakin hapus kategori ini?')"><i
                                                class="fa-solid fa-trash-can"></i></a></button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <?php
    include "../html/footer.php";
    ?>
</body>

</html>