<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../re-style/font.css">
    <link rel="stylesheet" href="../re-style/prop.css?v=1">
    <link rel="stylesheet" href="../re-style/header.css?v=1">
    <link rel="stylesheet" href="../re-style/style.css?v=1.1">
    <script src="../js/navbar.js?v=1.1"></script>
    <title>Dashboard</title>
</head>
<body>
    <header class="fixed">
        <div class="flex headbar-container">
            <section class="flex">
                <div class="hamburger" onclick="toggleNav()">
                    HB
                </div>
                <h1>placeholder</h1>
            </section>
            <section>
                middle content
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
            <button class="nav-button grid">
                <div>ico</div>
                <p>dashboard</p>
                <div></div>
            </button>
            <div class="dropdown">
                <button class="nav-button grid" id="dropdown-triger" onclick="toggleNavDropdown()">
                    <div>ico</div>
                    <p>aspirasi</p>
                    <div id="arrow">></div>
                </button>
                <div class="drop-content" id="dropdown">
                    <a href="">tambah</a>
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
            <section class="container flex">
                <div class="box">Selesai</div>
                <div class="box">Proses</div>
                <div class="box">Menunggu</div>
            </section>
            <section>
                <table>
                    <thead>

                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </section>
        </main>
    </div>
    <footer></footer>
</body>
</html>