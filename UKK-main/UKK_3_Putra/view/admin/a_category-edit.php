<?php

    //head
    include __DIR__ . "/a_header.php";
?>
    <title>Edit Kategori</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include("a_navbar.php");
?>
<!-- main start here -->
            <section>
                <form action="../../controller/c_category.php?action=update" method="post">
                    <input type="number" name="id_kategori" value="<?= $data->$id ?>" hidden>

                    <input type="text" name="isi_kategori" placeholder="kategori baru..">
                    <button type="submit">kirim</button>
                </form>
            </section>
<!-- footer & closing -->
<?php
    include("a_footer.php");
?>