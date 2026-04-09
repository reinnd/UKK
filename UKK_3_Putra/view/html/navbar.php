<header class="fixed">
    <div class="flex headbar-container">
        <section class="flex">
            <div class="hamburger flex flex-center" onclick="toggleNav()">
                <i class="fa-solid fa-bars"></i>
            </div>
            <h1>Aspirasi</h1>
        </section>
        <section>

        </section>
        <section class="flex">
            <p>
                <?= $_SESSION['user'] ?>
            </p>
            <a href="../profile.php">
                <div class="profile-holder">
                    <img src="../asset/img/pfp/test_img.jpg" alt="<?= $_SESSION['user'] ?>">
                </div>
            </a>
        </section>
    </div>
</header>
<div class="main-container flex">
    <nav class="">
        <?php if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') { ?>
            <a href="u_dashboard.php">
                <button class="nav-button grid <?= ($active_page == 'dashboard') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-house"></i></div>
                    <p>Dashboard</p>
                    <div></div>
                </button>
            </a>

            <a href="u_aspirasi.php">
                <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                    <div class="icon"><i class="fa-regular fa-newspaper"></i></div>
                    <p>Aspirasi</p>
                    <div id="arrow"></div>
                </button>
            </a>


            <a href="u_riwayat.php">
                <button class="nav-button grid <?= ($active_page == 'history') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <p>Riwayat</p>
                    <div></div>
                </button>
            </a>

        <?php } else { ?>
            <a href="a_dashboard.php">
                <button class="nav-button grid <?= ($active_page == 'dashboard') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-house"></i></div>
                    <p>Dashboard</p>
                    <div></div>
                </button>
            </a>

            <a href="a_aspirasi.php">
                <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                    <div class="icon"><i class="fa-regular fa-newspaper"></i></div>
                    <p>Aspirasi</p>
                    <div id="arrow"></div>
                </button>
            </a>

            <a href="a_kategori.php">
                <button class="nav-button grid <?= ($active_page == 'kategori') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-table-list"></i></div>
                    <p>Kategori</p>
                    <div></div>
                </button>
            </a>

            <a href="a_anggota.php">
                <button class="nav-button grid <?= ($active_page == 'anggota') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-users"></i></div>
                    <p>Anggota</p>
                    <div></div>
                </button>
            </a>

            <a href="a_riwayat.php">
                <button class="nav-button grid <?= ($active_page == 'history') ? 'nav-button-active' : ''; ?>">
                    <div class="icon"><i class="fa-solid fa-clock-rotate-left"></i></div>
                    <p>Riwayat</p>
                    <div></div>
                </button>
            </a>
        <?php } ?>
        <a href="../../controller/c_user.php?action=logout">
            <button class="nav-button grid <?= ($active_page == 'hisy') ? 'nav-button-active' : ''; ?>">
                <div class="icon"></div>
                <p>Logout</p>
                <div></div>
            </button>
        </a>

    </nav>
    <main>