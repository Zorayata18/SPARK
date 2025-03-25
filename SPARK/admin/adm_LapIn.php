<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="assets/logo dashboard(header).png" type="image/png">
    <title>SPark</title>
    <style>
        /* Floating Button */
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #cc0000;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold; /* Tambahkan ini untuk membuat tanda + lebih tebal */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .floating-button:hover {
            background-color: #b30000;
        }

        /* Modal */
        .modal {
            display: none; /* Sembunyikan modal secara default */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Latar belakang semi-transparan */
            overflow: auto;
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        #iya {
            width: 100%;
            padding: 9px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            background-color: #cc0000;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #b30000;
        }
    </style>
</head>
<body class="bg-gray-200">
    <!-- Navbar -->
    <section class="navbar">
        <nav class="bg-white flex items-center justify-center z-60 w-full fixed top-0 shadow-md">
            <div class="content-center w-full flex flex-wrap items-center justify-between mx-auto p-4 px-10 sticky top-0 min-h-16 md:px-20">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center whitespace-nowrap"><img src="../foto/Logo.png" alt="" class="i h-10"></span>
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
                                <{User}></a>
                        </li>
                        <li>
                            <a href="index.php" style="background: #cc0000; color: white; padding: 0.5rem 1.5rem; border-radius: 5px; text-decoration: none;">Keluar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section class="page1 overflow-x-hidden min-h-screen">
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
                            <p class="sidebartext font-medium sm:block"><a href="adm_ManUs.php">Dashboard</a></p>
                        </li>
                        <div class="sidebar-item relative">
                            <button id="manage-dropdown-toggle" class="w-full flex items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                                <div class="icon-container text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </div>
                                <span class="text-sm">Manage</span>
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-auto text-gray-500 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            
                            <div id="dropdown-menu" class="dropdown-menu pl-7 flex flex-col text-xs pt-1 hidden">
                                <a href="adm_Peng.php" class="dropdown-item text-gray-600 py-1 hover:text-black">Pengguna</a>
                                <a href="#" class="dropdown-item text-gray-600 py-1 hover:text-black">Operator</a>
                                <a href="#" class="dropdown-item text-gray-600 py-1 hover:text-black">Admin</a>
                            </div>
                        </div>                        
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="adm_riwayat.php">Riwayat</a></p>
                        </li>
                        <li class="items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M11 15h2v2h-2zm0-8h2v6h-2zm1-4a9 9 0 0 0-9 9a9 9 0 0 0 9 9a9 9 0 0 0 9-9a9 9 0 0 0-9-9m0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7s7 3.14 7 7s-3.14 7-7 7m8.5 1.5c2.16-2.19 3.5-5.19 3.5-8.5s-1.34-6.31-3.5-8.5l-1.08 1.08C21.32 6.5 22.5 9.11 22.5 12c0 2.9-1.18 5.5-3.08 7.42zM4.58 19.42C2.68 17.5 1.5 14.9 1.5 12c0-2.89 1.18-5.5 3.08-7.42L3.5 3.5C1.34 5.69 0 8.69 0 12s1.34 6.31 3.5 8.5z" />
                            </svg>
                            <p class="sidebartext font-bold sm:block"><a href="adm_LapIn.php">Laporan Insiden</a></p>
                        </li>
                        <li>
                            <button class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</button>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>
            <!-- Content Area -->
            <div class="content w-full ml-0 p-8 pt-24 text-gray-800 md:ml-[20%]">
                <!-- Filter Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Filter Laporan Insiden Parkir</h2>
                        <div class="h-0.5 bg-gray-200 w-full"></div>
                    </div>
                    <form action="" method="GET" class="flex flex-wrap gap-4 items-end">
                        <div class="flex-1 min-w-[200px]">
                            <label class="block text-sm text-gray-600 mb-2">Mulai Tanggal</label>
                            <input type="date" name="start_date" class="w-full p-2 border rounded font-normal">
                        </div>
                        <div class="flex-1 min-w-[200px]">
                            <label class="block text-sm text-gray-600 mb-2">Sampai Tanggal</label>
                            <input type="date" name="end_date" class="w-full p-2 border rounded font-normal">
                        </div>
                        <button type="submit" class="bg-red-600 text-white px-16 py-2 rounded hover:bg-red-700 w-full md:w-64">Tampilkan</button>
                    </form>
                </div>

                <!-- Data Report Section -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Laporan Data Insiden Parkir</h2>
                        <div class="h-0.5 bg-gray-200 w-full mb-4"></div>

                        <div class="flex flex-wrap gap-2 items-center">
                            <!-- Tombol Download PDF di kiri -->
                            <a href="koneksi.php?download_pdf=1&start_date=<?= $start_date ?>&end_date=<?= $end_date ?>&jenis_kendaraan=<?= $jenis_kendaraan ?>" 
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                                Download PDF
                            </a>

                            <!-- Right-aligned controls -->
                            <div class="flex gap-4 items-center ml-auto">
                                <select class="border p-2 rounded w-40 font-normal">
                                    <option value="">Pilih jenis kendaraan</option>
                                    <option value="mobil">Mobil</option>
                                    <option value="motor">Motor</option>
                                </select>
                                <div class="relative flex-grow">
                                    <input type="text" placeholder="Cari" class="border p-2 rounded pl-10 w-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute left-3 top-2.5 text-gray-400" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse shadow-lg rounded-lg overflow-hidden">
                            <thead>
                                <tr class="text-black">
                                    <th class="border border-gray-300 p-3 text-center">No.</th>
                                    <th class="border border-gray-300 p-3 text-center">Tanggal</th>
                                    <th class="border border-gray-300 p-3 text-center">ID Pegawai</th>
                                    <th class="border border-gray-300 p-3 text-center">Jenis Kendaraan</th>
                                    <th class="border border-gray-300 p-3 text-center">Nomor Plat</th>
                                    <th class="border border-gray-300 p-3 text-center">Kode Lahan</th>
                                    <th class="border border-gray-300 p-3 text-center">Petugas Operator</th>
                                    <th class="border border-gray-300 p-3 text-center">Status Parkir</th>
                                    <th class="border border-gray-300 p-3 text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    $no = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr class='hover:bg-gray-100 transition-all'>";
                                        echo "<td class='border border-gray-300 p-3 text-center'>" . $no++ . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["tanggal"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3 text-center'>" . $row["id_pegawai"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["jenis_kendaraan"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3 text-center'>" . $row["nomor_plat"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3 text-center'>" . $row["kode_lahan"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["petugas_operator"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3 text-center'>";
                                        echo $row["status_parkir"] == "Selesai" 
                                            ? "<span class='text-green-600 font-semibold'>Selesai</span>" 
                                            : "<span class='text-red-600 font-semibold'>Berlangsung</span>";
                                        echo "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . ($row["keterangan"] ?? "-") . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='11' class='border border-gray-300 p-3 text-center text-gray-600'>Tidak ada data</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Floating Button -->
    <div class="floating-button" onclick="openModal()" style="font-weight: bold;">
        +
    </div>

    <!-- Modal -->
    <div id="incidentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 style="font-weight: bold; text-align: center; font-size: 20px;">Lapor Insiden Parkir</h2>
            <form>
                <label for="employeeId">Masukkan ID Pegawai</label>
                <input type="text" id="iya" name="employeeId" placeholder="ID Pegawai" required>

                <label for="vehicleType">Jenis Kendaraan</label>
                <select id="iya" name="vehicleType" required>
                    <option value="">Pilih Jenis Kendaraan</option>
                    <option value="mobil">Mobil</option>
                    <option value="motor">Motor</option>
                </select>

                <label for="plateNumber">Nomor Plat</label>
                <input type="text" id="iya" name="plateNumber" placeholder="Nomor Plat Kendaraan" required>

                <label for="description">Keterangan</label>
                <textarea id="iya" name="description" placeholder="Tambahkan keterangan insiden parkir yang terjadi secara detail" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

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
        // Fungsi untuk membuka modal
        function openModal() {
            document.getElementById('incidentModal').style.display = 'block';
        }

        // Fungsi untuk menutup modal
        function closeModal() {
            document.getElementById('incidentModal').style.display = 'none';
        }

        // Tutup modal jika pengguna mengklik di luar modal
        window.onclick = function(event) {
            const modal = document.getElementById('incidentModal');
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        }
    </script>
</body>
</html>
