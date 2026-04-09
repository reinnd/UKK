<?php
include_once "../../controller/c_auth.php";

use App\c_auth\guard;
guard::soadmin();

include_once "../../controller/c_kategori.php";
$kategori = new m_kategori();
$data_kategori = $kategori->get_data_by_id($_GET['id_kategori']);

//head
include "../html/header.php";
?>
<title>Edit Kategori</title>
</head>

<body>
    <!-- header & navigation -->
    <?php
    include "../html/navbar.php";
    ?>
    <!-- main start here -->
    <section>
        <form action="../../controller/c_kategori.php?action=update" method="post">
            <?php

            ?>
            <input type="number" name="id_kategori" value="<?= $data_kategori->id_kategori ?>" hidden>

            <input type="text" name="isi_kategori" value="<?= $data_kategori->isi_kategori ?>"
                placeholder="kategori baru..">
            <?php ?>
            <button type="submit">kirim</button>
        </form>
    </section>
    <!-- footer & closing -->
    <?php
    include "../html/footer.php";
    ?>