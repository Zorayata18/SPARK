<?php
$servername = "localhost"; // Ganti dengan server Anda
$username = "root"; // Ganti dengan username database
$password = ""; // Ganti dengan password database
$dbname = "s_park"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data parkir terbaru
$sql = "SELECT waktu_masuk, nama_lokasi, kode_lahan, status, FROM parkir";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Kembalikan data dalam format JSON
echo json_encode($data);

$conn->close();
?>
