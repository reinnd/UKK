<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Toster JS</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            gap: 20px;
            background-color: #f4f4f9;
        }
        button {
            padding: 12px 24px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            transition: opacity 0.2s;
            color: white;
        }
        button:active { opacity: 0.8; }
        .btn-success { background-color: #28a745; }
        .btn-error { background-color: #dc3545; }
        .btn-loading { background-color: #007bff; }
    </style>
</head>
<body>

    <h1>Uji Coba Toster-JS</h1>
    
    <div>
        <button class="btn-success" id="successBtn">Klik untuk Sukses</button>
        <button class="btn-error" id="errorBtn">Klik untuk Error</button>
        <button class="btn-loading" id="loadingBtn">Simulasi Loading</button>
    </div>

    <script src="https://unpkg.com/toaster-ui@1.1.5/dist/main.js"></script>

    <script>
        // 2. Inisialisasi instance Toaster
        const toast = new ToasterUi();

        // Tombol Sukses
        document.getElementById('successBtn').addEventListener('click', () => {
            toast.addToast("Mantap! Data berhasil disimpan.", "success");
        });

        // Tombol Error
        document.getElementById('errorBtn').addEventListener('click', () => {
            toast.addToast("Waduh, ada yang salah nih.", "error");
        });

        // Tombol Loading (Update Status)
        document.getElementById('loadingBtn').addEventListener('click', () => {
            const myToastId = toast.addToast("Sedang mengunggah file...", "loading");

            // Simulasi proses selesai setelah 2.5 detik
            setTimeout(() => {
                toast.updateToast(myToastId, "File berhasil diunggah!", "success");
            }, 2500);
        });
    </script>

</body>
</html>