<?php
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user == "admin" && $pass == "admin") {
    echo "<h2>Login berhasil!</h2>";
    echo "<h3>Selamat datang, <span style='color: blue;'>admin</span>.</h3>";
} else {
    echo "<h2 style='color: red;'>Username : $user Tidak Terdaftar!</h2>";
}
echo "<a href='login.php'>kembali ke halaman login</a>";
?>