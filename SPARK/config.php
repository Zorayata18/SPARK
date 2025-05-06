<?php
$host = "localhost";
$user = "root"; // sesuaikan dengan user MySQL Anda
$pass = "";     // sesuaikan dengan password MySQL Anda
$db   = "s-park";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
