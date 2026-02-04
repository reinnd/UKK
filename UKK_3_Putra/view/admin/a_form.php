<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../controller/c_aspirasi.php?action=add" method="POST">
        
        <!-- id -->
        <input type="number" id="id" name="id" hidden>

        <label for="judul_aspirasi">judul</label>
        <input type="text" id="judul_aspirasi" name="judul_aspirasi">

        <!-- current user by id -->
        <input type="number" id="id_user" name="id_user" value="1" hidden>

        <label for="isi_aspirasi">isi</label>
        <input type="text" id="isi_aspirasi" name="isi_aspirasi">

        <input type="number" name="status" id="statu">

        <!-- pilihan -->
        <label for="kategori">kategori</label>
        <input type="number" id="id_kategori" value="1">

        <input type="number" id="id_feedback" value="1" hidden>

        <button type="submit">kirim</button>
    </form>
</body>
</html>