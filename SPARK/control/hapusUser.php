<?php
require "../../functions.php";

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    echo "<script>
        alert('ID tidak ditemukan!');
        document.location.href = '../adm_Peng.php'; 
    </script>";
    exit;
}

$id_user = $_GET["id"];

if (hapusAdmin($id_user) > 0) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = '../adm_Peng.php'; 
    </script>";
} else {
    echo "<script>
        alert('Data Gagal Dihapus');
        document.location.href = '../adm_Peng.php'; 
    </script>";
}
?>
