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
                            <p class="sidebartext font-bold sm:block"><a href="dashboard.php">Dashboard</a></p>
                        </li>
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-6 h-6 md:w-5 md:h-5">
                                <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2" fill="none"/>
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="3 3"/>
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="StaPar.php">Status Parkir</a></p>
                        </li>
                        <li class=" items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="user_Rwyt.php">Riwayat</a></p>
                        </li>
                        <li>
                            <button class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</button>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>
            <!-- Konten -->
            <div class="content w-full ml-0 p-8 pt-24 text-gray-800 md:ml-[20%]">
                <!-- Filter Section -->
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Filter Data Riwayat Parkir</h2>
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

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Laporan Data Riwayat Parkir</h2>
                        <div class="h-0.5 bg-gray-200 w-full mb-4"></div>

                        <div class="flex flex-wrap gap-4 items-center">
                            <!-- Tombol Download PDF di kiri -->
                            <a href="koneksi.php?download_pdf=1&start_date=<?= $start_date ?>&end_date=<?= $end_date ?>&jenis_kendaraan=<?= $jenis_kendaraan ?>" 
                            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
                                </svg>
                                Download PDF
                            </a>

                            <!-- Wrapper kanan, elemen tetap di kanan -->
                            <div class="flex gap-4 items-center ml-auto">
                                <select class="border p-2 rounded w-48 font-normal">
                                    <option value="">Pilih jenis pengendara</option>
                                    <option value="mobil">Mobil</option>
                                    <option value="motor">Motor</option>
                                </select>
                                <div class="relative">
                                    <input type="text" placeholder="Cari" class="border p-2 rounded pl-10">
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
                                    <th class="border border-gray-300 p-3 text-center">Jam Masuk</th>
                                    <th class="border border-gray-300 p-3 text-center">Jam Keluar</th>
                                    <th class="border border-gray-300 p-3 text-center">Kode Lahan</th>
                                    <th class="border border-gray-300 p-3 text-center">Petugas Operator</th>
                                    <th class="border border-gray-300 p-3 text-center">Status Parkir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr class='hover:bg-gray-100 transition-all'>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["id"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["tanggal"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["id_pegawai"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["jenis_kendaraan"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["nomor_plat"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["jam_masuk"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["jam_keluar"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["kode_lahan"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>" . $row["petugas_operator"] . "</td>";
                                        echo "<td class='border border-gray-300 p-3'>";
                                        echo $row["status_parkir"] == "Selesai" 
                                            ? "<span class='text-green-600 font-semibold'>Selesai</span>" 
                                            : "<span class='text-red-600 font-semibold'>Berlangsung</span>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='10' class='border border-gray-300 p-3 text-center text-gray-600'>Tidak ada data</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
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
</body>
</html>