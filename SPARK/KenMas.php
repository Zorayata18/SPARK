<?php
session_start();
require_once 'config.php'; // koneksi ke database

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user']) || $_SESSION['role'] !== 'operator') {
    header("Location: login.php");
    exit();
}

// Ambil ID operator dari session
$petugas_operator = $_SESSION['user']['id_operator'];

// Ambil data lokasi parkir
$lokasiQuery = mysqli_query($conn, "SELECT * FROM tb_tempat_parkir");

if (isset($_POST["submit"])) {
    // Atur timezone ke Asia/Jakarta agar jam lokal sesuai
    date_default_timezone_set("Asia/Jakarta");

    // Ambil data dari form
    $kode_lahan = $_POST["kode_lokasi"];
    $jenis_pengendara = $_POST["jenis_pengendara"];
    $jenis_kendaraan = $_POST["jenis_kendaraan"];
    $nomor_plat = $_POST["nomor_plat"];
    $status = "berlangsung";
    $tanggal = date("Y-m-d");
    $jam_masuk = date("H:i:s"); // waktu real saat submit

    // Ambil id_pengguna jika bukan VIP/VVIP
    $id_pengguna = ($jenis_pengendara != 'VIP/VVIP') ? $_POST["id_pengguna"] : NULL;

    // Query insert ke tb_riwayat_parkir
    $query = "INSERT INTO tb_riwayat_parkir (
                tanggal, id_pengguna, jenis_kendaraan, nomor_plat, jam_masuk, kode_lahan, petugas_operator, status
              ) VALUES (
                '$tanggal', " . ($id_pengguna ? "'$id_pengguna'" : "NULL") . ", '$jenis_kendaraan', '$nomor_plat', '$jam_masuk', '$kode_lahan', '$petugas_operator', '$status'
              )";

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data parkir berhasil disimpan.'); window.location='dashboard.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="assets/logo dashboard(header).png" type="image/png">
    <title>SPark</title>
</head>
<body class="bg-gray-200">
    <!-- Navbar -->
    <section class="navbar">
        <nav class="bg-white flex items-center justify-center z-60 w-full fixed top-0 shadow-md">
            <div class="content-center w-full flex flex-wrap items-center justify-between mx-auto p-4 px-10 sticky top-0 min-h-16 md:px-20">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center whitespace-nowrap"><img src="foto/Logo.png" alt="" class="i h-10"></span>
                    <button class="menu inline-flex items-center mt-2 ms-3 text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="#BA0805" class="bi bi-list block md:hidden md:" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                          </svg>
                    </button>   
                </a>
                <div class="profile">
                    <ul class="sidebartext font-medium items-center flex flex-row md:p-0 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
                        <li>
                            <a href="#page3" id="page3-link" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hidden py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:block">
                            <?php 
                            if (isset($_SESSION['user'])) {
                                echo $_SESSION['user']['nama'];
                            }
                            ?>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php" style="background: #cc0000; color: white; padding: 0.5rem 1.5rem; border-radius: 5px; text-decoration: none;">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="page1 overflow-x-hidden">
        <!-- Halaman -->
        <div class="flex mx-auto flex-row items-start justify-between h-auto gap-0 w-screen bg-gray-200 text-white font-bold md:h-screen">
            <!-- Sidebar -->
            <div class="containerSidebar flex flex-row w-screen fixed h-screen top-0 left-0 w-screen transition-transform duration-300 ease-in-out md:w-1/5" id="sidebar">
                <div class="Sidebar w-3/4 flex flex-col h-screen bg-white pt-24 p-6 ps-12 md:w-full md:pt-21">
                    <ul class="flex flex-col gap-2">
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-columns-gap w-6 h-6 md:w-5 md:h-5" viewBox="0 0 16 16">
                                <path d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/>
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="dashboard.php">Dashboard</a></p>
                        </li>
                        <li class="items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-in-right  w-6 h-6 md:w-5 md:h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                              </svg>
                            <p class="sidebartext font-bold sm:block"><a href="KenMas.php">Kendaraan Masuk</a></p>
                        </li>
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-box-arrow-left w-6 h-6 md:w-5 md:h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                              </svg>
                            <p href="#" class="sidebartext font-medium sm:block"><a href="KenKel.php">Kendaraan Keluar</a></p>
                        </li>
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="riwayat.php">Riwayat</a></p>
                        </li>
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M11 15h2v2h-2zm0-8h2v6h-2zm1-4a9 9 0 0 0-9 9a9 9 0 0 0 9 9a9 9 0 0 0 9-9a9 9 0 0 0-9-9m0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7s7 3.14 7 7s-3.14 7-7 7m8.5 1.5c2.16-2.19 3.5-5.19 3.5-8.5s-1.34-6.31-3.5-8.5l-1.08 1.08C21.32 6.5 22.5 9.11 22.5 12c0 2.9-1.18 5.5-3.08 7.42zM4.58 19.42C2.68 17.5 1.5 14.9 1.5 12c0-2.89 1.18-5.5 3.08-7.42L3.5 3.5C1.34 5.69 0 8.69 0 12s1.34 6.31 3.5 8.5z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="LapIn.php">Laporan Insiden</a></p>
                        </li>
                        <li>
                            <a href="logout.php" class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</a>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>
            <!-- Konten -->
            <div class="content flex flex-col justify-center w-screen gap-4 text-gray-900 pt-22 px-6 md:w-4/5 md:px-10 md:pt-21 md:ms-75">
                <!-- Form Container -->
                <div class="bg-gray-100 p-6 m rounded-lg shadow-md w-full max-w-9xl mx-auto mb-8">
                    <h2 class="text-lg font-bold mb-6">Input Data Parkir Kendaraan Masuk</h2>
                    <form method="post" class="space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm text-gray-600 block font-bold">Lokasi Parkir</label>
                                <select name="kode_lokasi" class="w-full p-2.5 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-gray-200 font-normal" id="lokasiParkir" required>
                                    <option value="">--Pilih--</option>
                                    <?php while ($lokasi = mysqli_fetch_assoc($lokasiQuery)) { ?>
                                        <option value="<?= $lokasi['kode_lokasi']; ?>" <?= (isset($_POST['kode_lokasi']) && $_POST['kode_lokasi'] == $lokasi['kode_lokasi']) ? 'selected' : ''; ?>>
                                            <?= $lokasi['nama_lokasi']; ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                    
                            <div class="space-y-2">
                                <label class="text-sm text-gray-600 block font-bold">Jenis Pengendara</label>
                                <select name="jenis_pengendara" class="w-full p-2.5 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-gray-200 font-normal" 
                                        id="jenisPengendara" 
                                        onchange="updateFields()" required>
                                    <option value="">--Pilih--</option>
                                    <option>Pegawai</option>
                                    <option>Magang/PKL</option>
                                    <option>VIP/VVIP</option>
                                </select>
                            </div>
                    
                            <div class="space-y-2" id="idContainer">
                                <label class="text-sm text-gray-600 block font-bold" id="idLabel">ID Pegawai</label>
                                <input type="text" 
                                    name="id_pengguna"
                                    placeholder="ex: 14556" 
                                    class="w-full p-2.5 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-gray-200 font-normal" 
                                    id="idPegawai">
                            </div>
                    
                            <div class="space-y-2" id="jenisKendaraanContainer">
                                <label class="text-sm text-gray-600 block font-bold">Jenis Kendaraan</label>
                                <select name="jenis_kendaraan" class="w-full p-2.5 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-gray-200 font-normal" id="jenisKendaraan" required>
                                    <option value="">--Pilih--</option>
                                    <option>Mobil</option>
                                    <option>Motor</option>
                                </select>
                            </div>
                    
                            <div class="space-y-2 md:col-span-2">
                                <label class="text-sm text-gray-600 block font-bold">Nomor Plat</label>
                                <input type="text" 
                                    name="nomor_plat"
                                    placeholder="ex: W1373DR" 
                                    class="w-full p-2.5 border border-gray-300 rounded-lg bg-white focus:ring-2 focus:ring-gray-200 font-normal" 
                                    id="nomorPlat" required>
                            </div>
                        </div>
                    
                        <!-- Tombol Aksi -->
                        <div class="flex justify-end space-x-3 pt-4">
                            <button type="button" 
                                    onclick="resetForm()" 
                                    class="px-6 py-2.5 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-2 focus:ring-gray-200">
                                Bersihkan
                            </button>
                            <button type="submit" name="submit" 
                                    class="px-6 py-2.5 bg-red-600 text-white rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-red-300">
                                Masukkan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Success Modal -->
            <div id="successModal" class="fixed inset-0 <?= isset($showSuccess) && $showSuccess ? 'flex' : 'hidden' ?> items-center justify-center z-50">
                <div class="bg-white rounded-lg p-8 max-w-sm w-full mx-4 relative shadow-[0_0_10px_rgba(0,0,0,0.1)]">
                    <!-- Close button -->
                    <button onclick="closeModal()" class="absolute top-4 right-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-gray-500" viewBox="0 0 16 16">
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                        </svg>
                    </button>
                    
                    <!-- Success Icon -->
                    <div class="flex justify-center mb-3">
                        <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="text-white" viewBox="0 0 16 16">
                                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="text-center">
                        <h2 class="text-2xl text-black font-bold mb-2 z-10">Berhasil!</h2>
                        <p class="text-gray-600 mb-6 font-normal">Input data parkir kendaraan masuk berhasil ditambahkan! Klik tombol Buka Portal Masuk!</p>
                        <button onclick="openGate()" class="w-full bg-red-600 text-white rounded-md py-2 px-4 hover:bg-red-700 transition-colors">
                            Buka Portal Masuk
                        </button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelector('.menu').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
        document.querySelector('.Sidebar2').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
    <script>
        // Fungsi untuk mereset form
        function resetForm() {
            document.getElementById('lokasiParkir').selectedIndex = 0;
            document.getElementById('jenisPengendara').selectedIndex = 0;
            document.getElementById('idPegawai').value = '';
            document.getElementById('jenisKendaraan').selectedIndex = 0;
            document.getElementById('nomorPlat').value = '';
            updateFields();
        }
    </script>
    <script>
        function closeModal() {
            document.getElementById('successModal').classList.add('hidden');
            document.getElementById('successModal').classList.remove('flex');
        }
    
        function openGate() {
            closeModal();
            document.querySelector('form').reset();
            updateFields();
            window.location.href = 'KenMas.php'; // Refresh the page
        }
    
        document.getElementById('successModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });
    </script>
    <script>
        function updateFields() {
            const jenisPengendara = document.getElementById('jenisPengendara').value;
            const idContainer = document.getElementById('idContainer');
            const idLabel = document.getElementById('idLabel');
            const idInput = document.getElementById('idPegawai');
            const jenisKendaraanContainer = document.getElementById('jenisKendaraanContainer');
        
            if (jenisPengendara === 'Pegawai') {
                idContainer.style.display = 'block';
                idLabel.textContent = 'ID Pegawai';
                idInput.placeholder = 'ex: 14556';
                idInput.required = true;
                jenisKendaraanContainer.classList.remove('md:col-span-2');
            } else if (jenisPengendara === 'Magang/PKL') {
                idContainer.style.display = 'block';
                idLabel.textContent = 'ID Magang';
                idInput.placeholder = 'ex: M14556';
                idInput.required = true;
                jenisKendaraanContainer.classList.remove('md:col-span-2');
            } else if (jenisPengendara === 'VIP/VVIP') {
                idContainer.style.display = 'none';
                idInput.required = false;
                jenisKendaraanContainer.classList.add('md:col-span-2');
            } else {
                idContainer.style.display = 'block';
                idLabel.textContent = 'ID Pegawai';
                idInput.placeholder = 'ex: 14556';
                idInput.required = true;
                jenisKendaraanContainer.classList.remove('md:col-span-2');
            }
        }
    </script>
</body>
</html>
