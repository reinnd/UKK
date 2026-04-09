<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
    //head
    $active_page = 'history';
    include "../html/header.php";
?>
    <link rel="stylesheet" href="../asset/style/form.css?v=2">
    <script src="../asset/js/memberAdd.js"></script>
    <title>Anggota - Tambah Anggota</title>
</head>
<body>
    <!-- header & navigation -->
<?php
    include "../html/navbar.php";
?>
<!-- main start here -->
            <section class="container form-container">
                <form id="act_mod" action='' method="post">

                    <div class="form-group flex">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="input-container" placeholder="" name="username" class="" required>
                    </div>
                    <div class="form-group flex">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="input-container" name="password" required>
                    </div>
                    <div class="form-group flex">
                        <label for="role">Role</label>
                        <select id="role" name="role" class="input-container" required>
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select id="kelas" name="kelas" class="input-container" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="X">Kelas X</option>
                            <option value="XI">Kelas XI</option>
                            <option value="XII">Kelas XII</option>
                        </select>
                    </div>
                    <div class="form-group flex">
                        <label for="nis">NIS</label>
                        <input type="text" class="input-container" id="nis" name="nis" disabled>
                    </div>

                    <button type="submit" class="btn-form">BUAT</button>
                    
                </form>
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>

