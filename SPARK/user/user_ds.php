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
                        <li class=" items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
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
                        <li class=" items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
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
            <div class="content flex flex-col justify-center w-screen gap-4 text-gray-900 pt-22 px-6 md:w-4/5 md:px-10 md:pt-21 md:ms-75">
                <div class="kontenAtas w-full flex gap-4 flex-col md:flex-row justify-between">
                    <div class="flex flex-col items-center w-full gap-2 h-auto p-4 bg-white rounded shadow-md justify-center md:w-1/4 md:h-54 md:p-0">
                        <div class="header flex flex-row items-center gap-2 md:flex-col">
                            <img class="w-15 h-15" src="../foto/LT.png" />
                            <p class="text-8xl font-medium">10</p>
                        </div>
                        <p class="sidebartext font-light">Lahan Tersedia</p>
                    </div>
                    <div class="flex flex-col items-center w-full gap-2 h-auto p-4 bg-white rounded shadow-md justify-center md:w-1/4 md:h-54 md:p-0">
                        <div class="header flex flex-row items-center gap-2 md:flex-col">
                            <img class="w-15 h-15" src="../foto/SgP.png"/>
                            <p class="text-8xl font-medium">14</p>
                        </div>
                        <p class="sidebartext font-light">Sedang parkir</p>
                    </div>
                    <div class="flex flex-col items-center w-full gap-2 h-auto p-4 bg-white rounded shadow-md justify-center md:w-1/4 md:h-54 md:p-0">
                        <div class="header flex flex-row items-center gap-2 md:flex-col">
                            <img class="w-15 h-15" src="../foto/SiP.png" />
                            <p class="text-8xl font-medium">12</p>
                        </div>
                        <p class="sidebartext font-light">Selesai Parkir</p>
                    </div>
                    <div class="flex flex-col items-center w-full gap-2 h-auto p-4 bg-white rounded shadow-md justify-center md:w-1/4 md:h-54 md:p-0">
                        <div class="header flex flex-row items-center gap-2 md:flex-col">
                            <img class="w-15 h-15" src="../foto/TDP.png" />
                            <p class="text-8xl font-medium">26</p>
                        </div>
                        <p class="sidebartext font-light">Total Data Parkir</p>
                    </div>
                </div>
                <div class="kontenBawah flex-col flex gap-4 md:flex-row md:h-full">
                    <span class="flex w-full flex-col h-full py-0 shadow-md bg-white rounded md:w-1/2 items-center justify-center md:h-64">
                        <div class="title">
                            Denah Lokasi Parkir Solo Technopark
                        </div>
                        <img src="../foto/peta.png" alt="parkiranSTP" class="denahParkir w-3/5">
                    </span>
                    <span class="flex flex-col w-full h-full shadow-md py-0 gap-4 bg-white rounded md:w-1/2 items-center justify-center md:h-64">
                        <div class="title">
                            Informasi Ketersediaan Lahan Parkir
                        </div>
                        <div class="Table overflow-x-auto sm:rounded-lg md:w-full p-2">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 w-4/5">
                                <thead class="text-xs border-gray-300 border-b text-gray-900 uppercase bg-gray-200">
                                    <tr>
                                        <th scope="col" class="px-4 py-2 w-2/6 text-gray-900">
                                            Kode Lokasi
                                        </th>
                                        <th scope="col" class="px-4 py-2 w-1/6 text-gray-900">
                                            Slot Parkir
                                        </th>
                                        <th scope="col" class="px-4 py-2 w-3/6 text-gray-900">
                                            Lokasi Parkir
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b border-gray-300 bg-dark-100 text-gray-900">
                                        <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">S</th>
                                        <td class="px-4 py-2 text-gray-900">9</td>
                                        <td class="px-4 py-2 text-gray-900">Depan Gedung STC</td>
                                    </tr>
                                    <tr class="dark:bg-gray-200 border-b border-gray-300">
                                        <th scope="row" class="px-4 py-2 font-medium text-gray-900">T</th>
                                        <td class="px-4 py-2 text-gray-900">9</td>
                                        <td class="px-4 py-2 text-gray-900">Belakang Gedung STC</td>
                                    </tr>
                                    <tr class="border-b border-gray-200 bg-dark-100 text-gray-900">
                                        <th scope="row" class="px-4 py-2 font-medium text-gray-900 whitespace-nowrap">P</th>
                                        <td class="px-4 py-2 text-gray-900">9</td>
                                        <td class="px-4 py-2 text-gray-900">Depan Gedung RnD</td>
                                    </tr>
                                    <tr class="bg-gray-200 border-b border-gray-300">
                                        <th scope="row" class="px-4 py-2 font-medium text-gray-900">K</th>
                                        <td class="px-4 py-2 text-gray-900">9</td>
                                        <td class="px-4 py-2 text-gray-900">Belakang Gedung Sembrani</td>
                                    </tr>
                                </tbody>                                
                            </table>
                        </div>
                    </span>
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