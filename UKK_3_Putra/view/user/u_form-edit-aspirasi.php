<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::notlogedin();
    include_once "../../controller/c_aspirasi.php";

    include_once "../../controller/c_kategori.php";
    //head
    include("../html/header.php");
?>
    <link rel="stylesheet" href="../asset/style/form.css?v=1">
    <title>Edit aspirasi</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include("../html/navbar.php");
?>
<!-- main start here -->
        <section class="container" style="display: block; max-width: 800px; margin-left: auto; margin-right: auto;">
            <h2 style="margin-bottom: 1.5rem; font-weight: 700;">Sampaikan Aspirasimu</h2>
            
            <form action="../../controller/c_aspirasi.php?action=add" method="POST">
                <?php 
                    foreach($user_data as $result){
                ?>
                    <div class="form-group flex">
                        <label for="judul">Topik</label>
                        <input type="text" value="<?= $result->judul ?>" id="judul" name="judul" class="form-control" placeholder="Contoh: Kerusakan Fasilitas" required>
                    </div>

                    <div class="form-group flex">
                        <label for="kategori">Kategori</label>
                        <select id="kategori" name="kategori" class="form-control" required>
                            <option value="" disabled selected>Pilih kategori..</option>
                    <?php 
                        foreach($data as $result){
                    ?>
                            <option value="<?= $result->id_kategori ?>"><?= $result->isi_kategori; ?></option>
                    <?php } ?>
                        </select>
                    </div>

                    <div class="form-group flex">
                        <label for="isi_aspirasi">Tulis aspirasimu</label>
                        <textarea id="isi_aspirasi" value="<?= $result->isi_aspirasi ?>" name="isi_aspirasi" class="form-control" placeholder="Ceritakan detail aspirasi atau keluhanmu di sini..." required></textarea>
                    </div>

                    <input type="number" id="id_siswa" name="id_siswa" value="<?= $_SESSION['id'] ?>" class="form-control" hidden>

                <?php } ?>

                <button type="submit" class="btn-form">Kirim Aspirasi</button>
            </form>
        </section>
<!-- footer & closing -->
<?php
    include("../html/footer.php");
?>