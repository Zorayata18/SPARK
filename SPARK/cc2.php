<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="assets/logo dashboard(header).png" type="image/png">
    <title>SPark</title>
    <style>
        .active-tab {
            color: #cc0000; /* Warna merah untuk tab aktif */
            position: relative;
        }
        .active-tab::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: #cc0000;
        }
        .content-box {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 16px;
            background-color: white;
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

    <section class="page1 overflow-x-hidden">
        <!-- Halaman -->
        <div class="flex mx-auto flex-row items-start justify-between h-auto gap-0 w-screen bg-gray-200 text-white font-bold md:h-screen">
            <!-- Sidebar -->
            <div class="containerSidebar flex flex-row w-screen fixed h-screen top-0 left-0 w-screen transition-transform duration-300 ease-in-out md:w-1/5" id="sidebar">
                <div class="Sidebar w-3/4 flex flex-col h-screen bg-white pt-24 p-6 ps-12 md:w-full md:pt-21">
                    <ul class="flex flex-col gap-2">
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-columns-gap w-6 h-6 md:w-5 md:h-5" viewBox="0 0 16 16">
                                <path d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/>
                            </svg>
                            <p class="sidebartext font-bold sm:block"><a href="dashboard.php">Dashboard</a></p>
                        </li>
                        <li class="items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" class="w-6 h-6 md:w-5 md:h-5">
                                <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="2" fill="none"/>
                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="3 3"/>
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="StaPar.php">Status Parkir</a></p>
                        </li>
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class= "w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z"/>
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="riwayat.php">Riwayat</a></p>
                        </li>
                        <li>
                            <button class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</button>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>

            <!-- Konten Utama -->
            <div class="flex flex-col items-center justify-start w-full h-auto ml-0 mt-20 p-6 md:ml-64">
                <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-4xl">
                    <!-- Tab Navigation updated to match image -->
                    <div class="flex border-b mb-6">
                        <div class="w-1/2 text-center">
                            <button id="berlangsung-btn" class="text-lg font-medium pb-3 focus:outline-none active-tab">
                                Berlangsung
                            </button>
                        </div>
                        <div class="w-1/2 text-center">
                            <button id="selesai-btn" class="text-lg font-medium pb-3 focus:outline-none text-gray-500">
                                Selesai
                            </button>
                        </div>
                    </div>
                    
                    <div id="content" class="mt-4">
                        <!-- Card for active parking -->
                        <div class="border border-gray-200 rounded-lg p-4 mb-4 relative">
                            <div class="flex flex-col">
                                <p class="text-gray-600 text-sm mb-1">5 Februari 2025, 07:00</p>
                                <p class="text-gray-800 font-medium mb-1">Parkir Belakang Gedung Sembrani</p>
                                <p class="text-gray-600 text-sm">Kode Lahan Parkir: K8</p>
                            </div>
                            
                            <div class="absolute top-4 right-4">
                                <span class="text-sm font-medium px-3 py-1 rounded-full bg-red-100 text-red-600">Berlangsung</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Fungsi untuk mengubah konten berdasarkan tab yang aktif
        document.getElementById('berlangsung-btn').addEventListener('click', function() {
            document.getElementById('content').innerHTML = `
                <div class="border border-gray-200 rounded-lg p-4 mb-4 relative">
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-sm mb-1">5 Februari 2025, 07:00</p>
                        <p class="text-gray-800 font-medium mb-1">Parkir Belakang Gedung Sembrani</p>
                        <p class="text-gray-600 text-sm">Kode Lahan Parkir: K8</p>
                    </div>
                    
                    <div class="absolute top-4 right-4">
                        <span class="text-sm font-medium px-3 py-1 rounded-full bg-red-100 text-red-600">Berlangsung</span>
                    </div>
                </div>
            `;
            // Tambahkan class active-tab ke tombol Berlangsung
            document.getElementById('berlangsung-btn').classList.add('active-tab');
            document.getElementById('berlangsung-btn').classList.remove('text-gray-500');
            document.getElementById('selesai-btn').classList.remove('active-tab');
            document.getElementById('selesai-btn').classList.add('text-gray-500');
        });

        document.getElementById('selesai-btn').addEventListener('click', function() {
            document.getElementById('content').innerHTML = `
                <div class="border border-gray-200 rounded-lg p-4 mb-4 relative">
                    <div class="flex flex-col">
                        <p class="text-gray-600 text-sm mb-1">5 Februari 2025, 07:00</p>
                        <p class="text-gray-800 font-medium mb-1">Parkir Belakang Gedung Sembrani</p>
                        <p class="text-gray-600 text-sm">Kode Lahan Parkir: K8</p>
                    </div>
                    
                    <div class="absolute top-4 right-4">
                        <span class="text-sm font-medium px-3 py-1 rounded-full bg-green-100 text-green-600">Selesai</span>
                    </div>
                </div>
            `;
            // Tambahkan class active-tab ke tombol Selesai
            document.getElementById('selesai-btn').classList.add('active-tab');
            document.getElementById('selesai-btn').classList.remove('text-gray-500');
            document.getElementById('berlangsung-btn').classList.remove('active-tab');
            document.getElementById('berlangsung-btn').classList.add('text-gray-500');
        });

        // Fungsi untuk toggle sidebar
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