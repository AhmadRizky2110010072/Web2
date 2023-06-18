<?php
include 'koneksi.php';

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password'");
$row = mysqli_fetch_array($result);

if ($row) {
    session_start();
    $_SESSION['username'] = $row['username'];
    $_SESSION['level'] = $row['level'];
    header("location:home.php");
} else {
    echo "Username atau Password yang anda masukan salah.</br>";
    echo "Harap Login Kembali!!!";
    echo '<meta http-equiv="refresh" content="3;url=index.php">';
}
?>