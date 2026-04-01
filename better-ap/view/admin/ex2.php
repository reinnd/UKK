<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Aspirasi - Riwayat</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <style>
        /* ================= PROP.CSS ================= */
        html {
            --header-height-base: 60px;
            --navbar-width-base: 200px;
            --button-width-base: 160px;
            --primary-color-base: #f2efff;
            --secondary-color-base: #f3f2f0;
            --white-1000: #fefefe;
            --white-900: #fbfbfb;
            --white-800: #f8f8f8;
            --white-700: #f5f5f5;
            --white-600: #f2f2f2;
            --white-500: #efefef;
            --white-400: #ececec;
            --white-300: #e9e9e9;
            --white-200: #e6e6e6;
            --white-100: #e3e3e3;
        }

        /* ================= STYLE.CSS ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
        }

        body {
            margin: 0;
            background-color: var(--white-500);
            min-height: 100vh;
        }

        a { text-decoration: none; }

        main {
            background-color: var(--white-500);
            flex: 1;
            min-height: calc(100vh - var(--header-height-base));
            margin-top: var(--header-height-base);
            margin-left: var(--navbar-width-base);
            transition: 0.15s ease-in-out;
            padding: 0 2em 2em 2em;
        }

        .container {
            border: transparent;
            background-color: var(--white-800);
            padding: 1.4em;
            margin-top: 24px;
            border-radius: 16px;
            display: flex;
            gap: 22px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 0.8em 1em;
            text-align: center;
        }

        th, tr:nth-child(even) {
            background-color: var(--white-600);
        }

        tr:nth-child(odd) {
            background-color: var(--white-300);
        }

        /* ================= HEADER.CSS ================= */
        header {
            width: 100%;
            background-color: var(--white-800);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }

        .headbar-container {
            height: var(--header-height-base);
            width: 100%;
            border-bottom: 1px solid #ccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .headbar-container section {
            display: flex;
            align-items: center;
            border: transparent;
        }

        .headbar-container section:nth-child(1) { gap: 1.5em; }
        .headbar-container section:nth-child(3) { gap: 1em; }

        .headbar-container h1 {
            font-size: 1.8em;
            font-weight: 900;
        }

        .hamburger {
            border: transparent;
            background: transparent;
            height: 40px;
            width: 40px;
            border-radius: 50%;
            font-size: 1.4em;
            font-weight: 100;
            cursor: pointer;
        }

        .hamburger:hover {
            background-color: var(--white-500);
        }

        .profile-holder {
            border: 1px solid black;
            border-radius: 50%;
            overflow: hidden;
            width: 32px;
            height: 32px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fff;
        }

        .profile-holder img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ================= NAV ================= */
        nav {
            width: var(--navbar-width-base);
            border: transparent;
            background-color: var(--white-800);
            height: calc(100vh - var(--header-height-base));
            padding-left: 16px;
            padding-top: 10px;
            top: var(--header-height-base);
            left: 0;
            position: fixed;
        }

        .nav-button {
            margin-top: 1rem;
            padding: 0.8em 0;
            width: var(--button-width-base);
            border-radius: 8px;
            display: block;
            text-align: center;
            font-weight: 500;
            font-size: 1em;
            border: transparent;
            background-color: var(--white-600);
            color: #000;
        }

        .nav-button-active {
            background-color: #e6b5b5;
            font-weight: 600;
        }

        .nav-button:hover {
            background-color: #e6b5b5;
        }

    </style>
</head>
<body>

    <header>
        <div class="headbar-container">
            <section>
                <button class="hamburger">☰</button>
                <h1>Aspirasi</h1>
            </section>
            <section></section> <section>
                <p>Mas Narjo</p>
                <div class="profile-holder">
                    <img src="a2.jpg" alt="">
                </div>
            </section>
        </div>
    </header>

    <nav>
        <a href="#" class="nav-button">dashboard</a>
        <a href="#" class="nav-button">aspirasi</a>
        <a href="#" class="nav-button">Kategori</a>
        <a href="#" class="nav-button">Anggota</a>
        <a href="#" class="nav-button nav-button-active">Riwayat</a> 
    </nav>

    <main>
        
        <div class="container" style="display: block;"> 
            <div style="overflow-x: auto;">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Role</th>
                            <th>Aksi</th>
                            <th>Waktu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>mas narjo</td>
                            <td>admin</td>
                            <td>mengubah status aspirasi</td>
                            <td>21 feb 2026</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>jhon</td>
                            <td>siswa</td>
                            <td>membuat aspirasi</td>
                            <td>16 feb 2026</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>rusdi</td>
                            <td>siswa</td>
                            <td>membuat aspirasi</td>
                            <td>13 feb 2026</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>jhon</td>
                            <td>siswa</td>
                            <td>membuat aspirasi</td>
                            <td>12 feb 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>

</body>
</html>