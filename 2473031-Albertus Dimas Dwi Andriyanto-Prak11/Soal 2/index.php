<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa - Panel Admin</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 40px 20px;
            color: #333;
        }

        .container {
            background-color: #fff;
            max-width: 900px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        h2 {
            margin-top: 0;
            font-weight: 600;
            color: #1a1a1a;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }

        .btn {
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-tambah {
            background-color: #28a745;
            color: white;
            margin-bottom: 20px;
        }

        .btn-tambah:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background-color: #f8f9fa;
            text-align: left;
            padding: 12px;
            border-bottom: 2px solid #dee2e6;
            color: #495057;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        tr:hover {
            background-color: #fafafa;
        }

        .btn-edit {
            color: #fff;
            background-color: #007bff;
            margin-right: 5px;
        }

        .btn-edit:hover {
            background-color: #0069d9;
        }

        .btn-hapus {
            color: #fff;
            background-color: #dc3545;
        }

        .btn-hapus:hover {
            background-color: #c82333;
        }

        .empty-row {
            text-align: center;
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Daftar Data Siswa</h2>
        
        <a href="tambah.php" class="btn btn-tambah">+ Tambah Data</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th style="width: 150px;">Opsi Aksi</th>
                </tr>
            </thead>
            <tbody>
               <?php
                $sql    = "SELECT * FROM siswa ORDER BY id ASC"; 
                $result = $conn->query($sql);

                if ($result->num_rows > 0):
                    $no = 1;
                    while ($row = $result->fetch_assoc()):
                ?>
                    <tr>
                        <td><strong><?= $no++; ?></strong></td> 
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["kelas"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-edit">Edit</a>
                            <a href="hapus.php?id=<?= $row['id']; ?>" 
                            class="btn btn-hapus" 
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php 
                    endwhile; 
                else: 
                ?>
                    <tr>
                        <td colspan="4" class="empty-row">Belum ada data siswa dalam database.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

</body>
</html>