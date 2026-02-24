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
            
            <a href="a_dashboard.php">
                <button class="nav-button grid <?= ($active_page == 'dashboard') ? 'nav-button-active' : '' ; ?>">
                    <div>ico</div>
                    <p>dashboard</p>
                    <div></div>
                </button>
            </a>
            
            <div class="dropdown">
                <a href="a_aspirasi.php">
                    <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                        <div>ico</div>
                        <p>aspirasi</p>
                        <div id="arrow">></div>
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
                    <div>ico</div>
                    <p>Kategori</p>
                    <div></div>
                </button>
            </a>
            
            <a href="a_history.php">
                <button class="nav-button grid <?= ($active_page == 'history') ? 'nav-button-active' : '' ; ?>">
                    <div>ico</div>
                    <p>Riwayat</p>
                    <div></div>
                </button>
            </a>
            
        </nav>
        <main>