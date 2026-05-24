<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan!";
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            padding-top: 50px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 500px;
        }

        h3 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
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
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-sizing: border-box; 
            background-color: #ffffff;
        }

        .btn-update {
            background-color: #5cb85c;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block;
            margin-bottom: 15px;
            font-size: 16px;
            width: fit-content;
        }

        .btn-kembali {
            background-color: #33a5ff;
            color: white;
            padding: 10px 25px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            font-size: 16px;
            width: fit-content;
        }

        .btn-update:hover { background-color: #4cae4c; }
        .btn-kembali:hover { background-color: #1e90ff; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Edit Data Siswa</h3>
        <form action="proses_edit.php" method="POST">
            
            <input type="hidden" name="id" value="<?= $data['id']; ?>">

            <label>Nama</label>
            <input type="text" name="nama" value="<?= $data['nama']; ?>" required autocomplete="off">

            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= $data['kelas']; ?>" required autocomplete="off">

            <div class="btn-group">
                <button type="submit" name="update" class="btn btn-update">Update</button>
                <a href="index.php" class="btn btn-kembali">Kembali</a>
            </div>
        </form>
    </div>

</body>
</html>