<?php
    include_once "../../controller/c_auth.php";

    use App\c_auth\guard;
    guard::soadmin();
    
    //head
    $active_page = 'history';
    include "../html/header.php";
?>
    <link rel="stylesheet" href="../asset/style/form.css?v=2">
    <title>Dashboard</title>
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
                        <input type="text" id="username" class="form-control" placeholder="" name="username" class="" required>
                    </div>
                    <div class="form-group flex">
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group flex">
                        <label for="role">Role</label>
                        <select id="role" name="role" class="form-control" required>
                            <option value="" disabled selected>Pilih Role</option>
                            <option value="admin">Admin</option>
                            <option value="siswa">Siswa</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select id="kelas" name="kelas" class="form-control" required>
                            <option value="" disabled selected>Pilih Kelas</option>
                            <option value="X">Kelas X</option>
                            <option value="XI">Kelas XI</option>
                            <option value="XII">Kelas XII</option>
                        </select>
                    </div>
                    <div class="form-group flex">
                        <label for="nis">NIS</label>
                        <input type="text" class="form-control" id="nis" name="nis" disabled>
                    </div>

                    <button type="submit" class="btn-form">BUAT</button>
                    
                </form>
            </section>
<!-- footer & closing -->
<?php
    include "../html/footer.php";
?>

<script>
    const roleIn = document.getElementById('role');
    const classValue = document.getElementById('kelas');
    const nisValue = document.getElementById('nis');
    const actMod = document.getElementById('act_mod');

    function roleExtras() {
        if (roleIn.value === 'siswa') {
            classValue.disabled = false;
            nisValue.disabled = false;
        } else {
            classValue.disabled = true;
            nisValue.disabled = true;
            classValue.value = ''; // Clear kelas input jika bukan siswa
            nisValue.value = '';
        }

        // Update form action berdasarkan role
        if (roleIn.value === 'admin') {
            actMod.action = '../../controller/c_user.php?action=register&type=primary';
        } else if (roleIn.value === 'siswa') {
            actMod.action = '../../controller/c_user.php?action=register';
        } else {
            actMod.action = '';
        }
    }

    roleIn.addEventListener('change', roleExtras);
    roleExtras();

    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type');


</script>
