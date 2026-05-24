<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

       .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 500px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-top: 0;
            margin-bottom: 25px;
            font-size: 24px; 
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 16px; 
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 25px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 14px;
        }

        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn-simpan {
            background-color: #5cb85c;
            color: white;
        }

        .btn-simpan:hover {
            background-color: #4cae4c;
        }

        .btn-kembali {
            background-color: #2196F3;
            color: white;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #0b7dda;
        }
    </style>
</head>

<body>

    <div class="card">
        <h3>Tambah Data Siswa</h3>
        <form action="proses_tambah.php" method="POST">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" autocomplete="off" required>

            <label for="kelas">Kelas</label>
            <input type="text" id="kelas" name="kelas" autocomplete="off" required>

            <div class="btn-group">
                <button type="submit" class="btn btn-simpan">Simpan</button>
                <a href="index.php" class="btn btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

</body>

</html>