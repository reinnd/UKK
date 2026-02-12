<header class="fixed">
        <div class="flex headbar-container">
            <section class="flex">
                <div class="hamburger flex flex-center" onclick="toggleNav()">
                    HB
                </div>
                <h1>placeholder</h1>
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
                <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                    <div>ico</div>
                    <p>aspirasi</p>
                    <div id="arrow">></div>
                </button>
                <div class="drop-content" id="dropdown">
                    <a href="a_form-tambah-aspirasi.php" class="<?= ($active_page == 'add-aspiration') ? 'nav-button-active' : '' ; ?>">tambah</a>
                    <a href="">edit</a>
                    <a href="">hapus</a>
                </div>
            </div>
            
            <button class="nav-button grid">
                <div>ico</div>
                <p>histori</p>
                <div></div>
            </button>
            <button class="nav-button grid">
                <div>ico</div>
                <p>setting</p>
                <div></div>
            </button>
        </nav>
        <main>