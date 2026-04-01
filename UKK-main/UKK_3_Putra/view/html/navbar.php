<header class="fixed">
        <div class="flex headbar-container">
            <section class="flex">
                <div class="hamburger flex flex-center" onclick="toggleNav()">
                ☰
                </div>
                <h1>Aspirasi</h1>
            </section>
            <section>
                
            </section>
            <section class="flex">
                <p>username</p>
                <div class="profile-holder">
                    <img src="" alt="img">
                </div>
            </section>
        </div>
    </header>
    <div class="main-container flex">
        <nav class="">
            
<?php //if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'){ ?>
            <a href="a_dashboard.php">
                <button class="nav-button grid <?= ($active_page == 'dashboard') ? 'nav-button-active' : '' ; ?>">
                    <div></div>
                    <p>Dashboard</p>
                    <div></div>
                </button>
            </a>
            
            <div class="dropdown">
                <a href="a_aspirasi.php">
                    <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                        <div></div>
                        <p>Aspirasi</p>
                        <div id="arrow"></div>
                    </button>
                </a>
                    <div class="drop-content" id="dropdown">
                        <a href="a_form-tambah-aspirasi.php" class="<?= ($active_page == 'add-aspiration') ? 'nav-button-active' : '' ; ?>">tambah</a>
                        <a href="">edit</a>
                        <a href="">hapus</a>
                    </div>
            </div>

            <a href="a_category.php">
                <button class="nav-button grid <?= ($active_page == 'category') ? 'nav-button-active' : '' ; ?>">
                    <div></div>
                    <p>Kategori</p>
                    <div></div>
                </button>
            </a>

            <a href="a_anggota.php">
                <button class="nav-button grid <?= ($active_page == 'anggota') ? 'nav-button-active' : '' ; ?>">
                    <div></div>
                    <p>Anggota</p>
                    <div></div>
                </button>
            </a>
            
            <a href="a_riwayat.php">
                <button class="nav-button grid <?= ($active_page == 'history') ? 'nav-button-active' : '' ; ?>">
                    <div></div>
                    <p>Riwayat</p>
                    <div></div>
                </button>
            </a>
<?php //} ?>
            
        </nav>
        <main>