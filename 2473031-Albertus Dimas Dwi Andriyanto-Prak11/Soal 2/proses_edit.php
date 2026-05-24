<?php
include 'koneksi.php';

$id    = $_POST['id']; 
$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];

$sql = "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Data berhasil diperbarui!');
            window.location.href='index.php';
          </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>