<?php
    include_once "../../controller/c_category.php";
    //head
    include("u_header.php");
?>
    <title>Tulis Aspirasimu</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include("u_navbar.php");
?>
<!-- main start here -->
            <section class="container grid">
                <form action="../../controller/c_aspirasi.php" method="post">
                    
                    <!-- judul aspirasi -->
                    <div class="box grid">
                        <label for="judul">Topik Aspirasi</label>
                        <input type="text" name="judul">
                    </div>
                    
                    <!-- kategori -->
                    <div class="box grid">
                        <label for="kategori">Pilih Kategori</label>
                        <?php 
                            foreach($data as $result){
                        ?>
                        <div class="">
                            <input type="radio" name="id_kategori" value="<?= $result->id_kategori ?>"><?= $result->isi_kategori?>
                        </div>
                        <?php 
                            }
                        ?>
                    </div>

                    <!-- isi aspirasi -->
                    <div class="box">
                        <label for="">Tulis Aspirasi</label>
                        <input type="text">
                    </div>

                    <!-- hidden -->
                     <input type="number" name="id_user" value="1" hidden>
                     <input type="number" name="id_feedback" value="1" hidden>
                     <input type="text" name="status" value="menunggu" hidden>

                     <button type="submit">Kirim</button>
                </form>
            </section>
<!-- footer & closing -->
<?php
    include("u_footer.php");
?>