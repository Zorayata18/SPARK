<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <link rel="icon" href="assets/logo dashboard(header).png" type="image/png">
    <title>SPark</title>
    <style>
        .containerSidebar {
            z-index: 50;
        }
        
        #layoutSidenav_content {
            margin-left: 0;
        }
        
        @media (min-width: 768px) {
            .containerSidebar {
                transform: translateX(0);
            }
            
            #layoutSidenav_content {
                margin-left: 20%; /* Sesuaikan dengan lebar sidebar */
            }
        }
        
        .overflow-x-auto {
            overflow-x: auto;
        }
        
        table {
            border-collapse: collapse;
            min-width: 600px;
        }
        
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        
        th {
            background-color: #f5f5f5;
        }
        .dropdown-item.active {
            color: black !important;
            font-weight: 500;
        }
        .active-bold {
            font-weight: bold;
            color: black;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
        }

        /* Form styles */
        form label {
            display: block;
            margin-top: 10px;
            margin-bottom: 5px;
            font-weight: 500;
        }

        form input, form select, form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form button {
            background-color: #cc0000;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        form button:hover {
            background-color: #990000;
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
            <div class="containerSidebar flex flex-row w-screen fixed h-screen top-0 left-0 w-screen transition-transform duration-300 ease-in-out -translate-x-full md:translate-x-0 md:w-1/5" id="sidebar">
                <div class="Sidebar w-3/4 flex flex-col h-screen bg-white pt-24 p-6 ps-12 md:w-full md:pt-21">
                    <ul class="flex flex-col gap-2">
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-columns-gap w-6 h-6 md:w-5 md:h-5" viewBox="0 0 16 16">
                                <path d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/>
                            </svg>
                            <p class="sidebartext font-bold sm:block"><a href="adm_ManUs.php">Dashboard</a></p>
                        </li>
                        <div class="sidebar-item relative">
                            <button id="manage-dropdown-toggle" class="w-full flex items-center gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                                <div class="icon-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </div>
                                <span class="text-sm">Manage</span>
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-auto transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>                            
                            <div id="dropdown-menu" class="dropdown-menu pl-7 flex flex-col text-xs pt-1 hidden">
                                <a href="adm_Peng.php" class="dropdown-item py-1 text-gray-600 hover:text-black">Pengguna</a>
                                <a href="adm_Operator.php" class="dropdown-item py-1 text-gray-600 hover:text-black">Operator</a>
                                <a href="adm_Admin.php" class="dropdown-item py-1 text-gray-600 hover:text-black">Admin</a>
                            </div>
                        </div>
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="adm_riwayat.php">Riwayat</a></p>
                        </li>
                        <li class="items-center flex gap-3 text-gray-500 p-2 rounded hover:bg-gray-200 hover:text-gray-800">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 md:w-5 md:h-5" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M11 15h2v2h-2zm0-8h2v6h-2zm1-4a9 9 0 0 0-9 9a9 9 0 0 0 9 9a9 9 0 0 0 9-9a9 9 0 0 0-9-9m0 16c-3.86 0-7-3.14-7-7s3.14-7 7-7s7 3.14 7 7s-3.14 7-7 7m8.5 1.5c2.16-2.19 3.5-5.19 3.5-8.5s-1.34-6.31-3.5-8.5l-1.08 1.08C21.32 6.5 22.5 9.11 22.5 12c0 2.9-1.18 5.5-3.08 7.42zM4.58 19.42C2.68 17.5 1.5 14.9 1.5 12c0-2.89 1.18-5.5 3.08-7.42L3.5 3.5C1.34 5.69 0 8.69 0 12s1.34 6.31 3.5 8.5z" />
                            </svg>
                            <p class="sidebartext font-medium sm:block"><a href="adm_LapIn.php">Laporan Insiden</a></p>
                        </li>
                        <li>
                            <a href="index.php" class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</a>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>
            <!-- Konten -->
            <div id="layoutSidenav_content" class="flex-1 transition-all duration-300">
                <main class="container mx-auto px-4 mt-16 md:mt-24">
                    <div class="container-fluid px-4 py-4 card mb-4 bg-white rounded shadow mt-4">
                        <div class="flex justify-between items-center px-4">
                            <h1 class="mt-4 text-black text-2xl">All Users</h1>
                            <div class="flex items-center space-x-4">
                                <!-- Changed from rectangular to circular button -->
                                <button class="bg-red-600 text-white p-2 rounded-full" onclick="openModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                                <div class="relative">
                                    <input type="text" id="searchInput" placeholder="Cari..." class="border rounded py-2 px-4 pl-10 text-black">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="absolute left-3 top-3 text-black" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>
                                <div class="relative">
                                    <button id="filterButton" class="border rounded py-2 px-4 flex items-center text-black">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-2" viewBox="0 0 16 16">
                                            <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2zm1 .5v1.308l4.372 4.858A.5.5 0 0 1 7 8.5v5.306l2-.666V8.5a.5.5 0 0 1 .128-.334L13.5 3.308V2h-11z"/>
                                        </svg>
                                        Filter
                                    </button>
                                    
                                    <!-- Dropdown Filter Menu -->
                                    <div id="filterDropdown" class="absolute right-0 mt-2 w-64 bg-white rounded shadow-lg z-10 hidden text-black">
                                        <div class="p-4">
                                            <h4 class="font-semibold mb-2">Jenis Pengendara</h4>
                                            <div class="space-y-2 mb-4">
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="driverType" value="Pegawai" class="mr-2">
                                                    Pegawai
                                                </label>
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="driverType" value="Magang/PKL" class="mr-2">
                                                    Magang/PKL
                                                </label>
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="driverType" value="VIP/VVIP" class="mr-2">
                                                    VIP/VVIP
                                                </label>
                                            </div>
                                            
                                            <h4 class="font-semibold mb-2">Status</h4>
                                            <div class="space-y-2 mb-4">
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="status" value="Active" class="mr-2">
                                                    Active
                                                </label>
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="status" value="Deactive" class="mr-2">
                                                    Deactive
                                                </label>
                                            </div>
                                            
                                            <div class="flex justify-between mt-4">
                                                <button id="applyFilter" class="bg-red-600 text-white py-1 px-3 rounded text-sm">Apply</button>
                                                <button id="resetFilter" class="border border-gray-300 py-1 px-3 rounded text-sm">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="card-body p-4">
                                <div class="overflow-x-auto">
                                    <table id="datatablesSimple" class="w-full text-sm text-left text-gray-700">
                                        <thead>
                                            <tr>
                                                <th class="py-3 px-4 bg-gray-100">Username</th>
                                                <th class="py-3 px-4 bg-gray-100">Email</th>
                                                <th class="py-3 px-4 bg-gray-100">Jenis Pengendara</th>
                                                <th class="py-3 px-4 bg-gray-100">Nomor Telepon</th>
                                                <th class="py-3 px-4 bg-gray-100">Status</th>
                                                <th class="py-3 px-4 bg-gray-100">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b hover:bg-gray-50">
                                                <td class="py-3 px-4">hariawan</td>
                                                <td class="py-3 px-4">hariawan@gmail.com</td>
                                                <td class="py-3 px-4">Mahguru/PG</td>
                                                <td class="py-3 px-4">(857)7534678</td>
                                                <td class="py-3 px-4">
                                                    <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                                </td>
                                                <td class="py-3 px-4">
                                                    <div class="flex space-x-2">
                                                        <button class="text-blue-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                            </svg>
                                                        </button>
                                                        <button class="text-red-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="border-b hover:bg-gray-50">
                                                <td class="py-3 px-4">Dita</td>
                                                <td class="py-3 px-4">dita@gmail.com</td>
                                                <td class="py-3 px-4">Magang/PKL</td>
                                                <td class="py-3 px-4">(857)7534678</td>
                                                <td class="py-3 px-4">
                                                    <span class="bg-green-100 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                                </td>
                                                <td class="py-3 px-4">
                                                    <div class="flex space-x-2">
                                                        <button class="text-blue-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                                            </svg>
                                                        </button>
                                                        <button class="text-red-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div class="flex justify-center mt-4">
                                    <nav class="flex items-center space-x-1">
                                        <a href="" class="px-3 py-1 border rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                                            </svg>
                                        </a>
                                        <a href="#" class="px-3 py-1 border rounded bg-red-600 text-white">1</a>
                                        <a href="#" class="px-3 py-1 border rounded text-gray-600 hover:bg-gray-100">2</a>
                                        <a href="#" class="px-3 py-1 border rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>   
        </div>
    </section>
        <!-- Modal -->
        <div id="incidentModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2 style="font-weight: bold; text-align: center; font-size: 20px;">Tambahkan Pengguna</h2>
            <form>
                <label for="employeePeng">Username Pengguna</label>
                <input type="text" id="iya" name="employeePeng" placeholder="Masukkan Username Pengguna" required>

                <label for="Email">Email Pengguna</label>
                <input type="text" id="iya" name="email" placeholder="Masukkan Email Pengguna" required>

                <label for="vehicleType">Jenis Pengendara</label>
                <select id="iya" name="vehicleType" required>
                    <option value="">Pilih Jenis Pengendara</option>
                    <option value="pegawai">Pegawai</option>
                    <option value="magang">Magang/PKL</option>
                    <option value="vvip">VIP/VVIP</option>
                </select>

                <label for="plateNumber">Nomor Telepon</label>
                <input type="text" id="iya" name="plateTelepon" placeholder="Nomor Telepon" required>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
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
    <script>
        // Mobile sidebar toggle
        document.querySelector('.menu').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
        
        document.querySelector('.Sidebar2').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });

        // Dropdown toggle functionality
        document.getElementById('manage-dropdown-toggle').addEventListener('click', function(e) {
            const dropdownMenu = document.getElementById('dropdown-menu');
            const dropdownArrow = document.getElementById('dropdown-arrow');
            
            // Toggle the dropdown menu
            dropdownMenu.classList.toggle('hidden');
            
            // Rotate arrow when dropdown is open
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownArrow.style.transform = 'rotate(0deg)';
                this.classList.remove('bg-gray-200', 'text-gray-900');
            } else {
                dropdownArrow.style.transform = 'rotate(180deg)';
                this.classList.add('bg-gray-200', 'text-gray-900');
            }
        });
        
        // Handle active state for dropdown items
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        // Check current page URL and mark active item
        const currentPath = window.location.pathname;
        const currentPage = currentPath.substring(currentPath.lastIndexOf('/') + 1);

        dropdownItems.forEach(item => {
            const itemHref = item.getAttribute('href');
            if (itemHref === currentPage) {
                item.classList.add('active-bold');
                // Also show dropdown if one of its items is active
                document.getElementById('dropdown-menu').classList.remove('hidden');
                document.getElementById('dropdown-arrow').style.transform = 'rotate(180deg)';
                document.getElementById('manage-dropdown-toggle').classList.add('bg-gray-200', 'text-gray-900');
            }

            item.addEventListener('click', function() {
                // Remove active class from all items
                dropdownItems.forEach(i => i.classList.remove('active-bold'));

                // Add active class to clicked item
                this.classList.add('active-bold');
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-datatables/3.2.0/simple-datatables.min.js"></script>
    <script>
        // Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            
            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    const searchTerm = searchInput.value.toLowerCase();
                    const table = document.getElementById('datatablesSimple');
                    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                    
                    // Loop through all table rows
                    for (let i = 0; i < rows.length; i++) {
                        let found = false;
                        const cells = rows[i].getElementsByTagName('td');
                        
                        // Loop through all cells in the current row
                        for (let j = 0; j < cells.length; j++) {
                            const cellText = cells[j].textContent || cells[j].innerText;
                            
                            // If the cell contains the search term
                            if (cellText.toLowerCase().indexOf(searchTerm) > -1) {
                                found = true;
                                break;
                            }
                        }
                        
                        // Show/hide the row based on whether the search term was found
                        if (found) {
                            rows[i].style.display = "";
                        } else {
                            rows[i].style.display = "none";
                        }
                    }
                });
            }
        });
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables initialization
            const datatablesSimple = document.getElementById('datatablesSimple');
            let dataTable;
            
            if (datatablesSimple) {
                dataTable = new simpleDatatables.DataTable(datatablesSimple, {
                    perPage: 10,
                    perPageSelect: [10, 20, 30, 50],
                    searchable: true,
                    sortable: true,
                    fixedHeight: false,
                    labels: {
                        placeholder: "Search...",
                        perPage: "entries per page",
                        noRows: "No entries found",
                        info: "Showing {start} to {end} of {rows} entries"
                    }
                });
                
                // Connect the custom search input to DataTable's search functionality
                const searchInput = document.getElementById('searchInput');
                if (searchInput) {
                    searchInput.addEventListener('keyup', function() {
                        dataTable.search(this.value);
                    });
                }
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Filter dropdown toggle
            const filterButton = document.getElementById('filterButton');
            const filterDropdown = document.getElementById('filterDropdown');
            const applyFilterButton = document.getElementById('applyFilter');
            const resetFilterButton = document.getElementById('resetFilter');
            
            // Toggle filter dropdown
            if (filterButton && filterDropdown) {
                filterButton.addEventListener('click', function(e) {
                    e.stopPropagation();
                    filterDropdown.classList.toggle('hidden');
                });
                
                // Close dropdown when clicking outside
                document.addEventListener('click', function(e) {
                    if (!filterDropdown.contains(e.target) && e.target !== filterButton) {
                        filterDropdown.classList.add('hidden');
                    }
                });
            }
            
            // Apply filter
            if (applyFilterButton) {
                applyFilterButton.addEventListener('click', function() {
                    applyFilters();
                    filterDropdown.classList.add('hidden');
                });
            }
            
            // Reset filter
            if (resetFilterButton) {
                resetFilterButton.addEventListener('click', function() {
                    // Uncheck all checkboxes
                    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                        checkbox.checked = false;
                    });
                    
                    // Reset the table to show all rows
                    const table = document.getElementById('datatablesSimple');
                    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                    
                    for (let i = 0; i < rows.length; i++) {
                        rows[i].style.display = "";
                    }
                    
                    filterDropdown.classList.add('hidden');
                });
            }
            
            // Function to apply filters
            function applyFilters() {
                // Get selected driver types
                const selectedDriverTypes = Array.from(document.querySelectorAll('input[name="driverType"]:checked')).map(cb => cb.value);
                
                // Get selected statuses
                const selectedStatuses = Array.from(document.querySelectorAll('input[name="status"]:checked')).map(cb => cb.value);
                
                // Get table rows
                const table = document.getElementById('datatablesSimple');
                const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                
                // Check if any filters are selected
                const noDriverTypeFilter = selectedDriverTypes.length === 0;
                const noStatusFilter = selectedStatuses.length === 0;
                
                // Loop through all table rows and apply filters
                for (let i = 0; i < rows.length; i++) {
                    const cells = rows[i].getElementsByTagName('td');
                    
                    // Get driver type (column index 2) and status (column index 4)
                    const driverType = cells[2].textContent.trim();
                    const status = cells[4].textContent.trim();
                    
                    // Determine if the row matches the filters
                    const driverTypeMatch = noDriverTypeFilter || selectedDriverTypes.some(type => driverType.includes(type));
                    const statusMatch = noStatusFilter || selectedStatuses.some(s => status.includes(s));
                    
                    // Show/hide the row based on filter match
                    if (driverTypeMatch && statusMatch) {
                        rows[i].style.display = "";
                    } else {
                        rows[i].style.display = "none";
                    }
                }
            }
        });
    </script>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            // Simple-DataTables initialization
            const datatablesSimple = document.getElementById('datatablesSimple');
            let dataTable;
            
            if (datatablesSimple) {
                dataTable = new simpleDatatables.DataTable(datatablesSimple, {
                    perPage: 10,
                    perPageSelect: [10, 20, 30, 50],
                    searchable: true,
                    sortable: true,
                    fixedHeight: false,
                    labels: {
                        placeholder: "Search...",
                        perPage: "entries per page",
                        noRows: "No entries found",
                        info: "Showing {start} to {end} of {rows} entries"
                    }
                });
                
                // Connect search input to DataTable
                const searchInput = document.getElementById('searchInput');
                if (searchInput) {
                    searchInput.addEventListener('keyup', function() {
                        dataTable.search(this.value);
                    });
                }
                
                // Filter dropdown toggle
                const filterButton = document.getElementById('filterButton');
                const filterDropdown = document.getElementById('filterDropdown');
                const applyFilterButton = document.getElementById('applyFilter');
                const resetFilterButton = document.getElementById('resetFilter');
                
                // Toggle filter dropdown
                if (filterButton && filterDropdown) {
                    filterButton.addEventListener('click', function(e) {
                        e.stopPropagation();
                        filterDropdown.classList.toggle('hidden');
                    });
                    
                    // Close dropdown when clicking outside
                    document.addEventListener('click', function(e) {
                        if (!filterDropdown.contains(e.target) && e.target !== filterButton) {
                            filterDropdown.classList.add('hidden');
                        }
                    });
                }
                
                // Apply filter
                if (applyFilterButton) {
                    applyFilterButton.addEventListener('click', function() {
                        applyFilters(dataTable);
                        filterDropdown.classList.add('hidden');
                    });
                }
                
                // Reset filter
                if (resetFilterButton) {
                    resetFilterButton.addEventListener('click', function() {
                        // Uncheck all checkboxes
                        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
                            checkbox.checked = false;
                        });
                        
                        // Reset the table
                        dataTable.searchData.filters = [];
                        dataTable.search('');
                        dataTable.update();
                        
                        filterDropdown.classList.add('hidden');
                    });
                }
                
                // Function to apply filters with simple-datatables
                function applyFilters(dataTable) {
                    // Get selected driver types
                    const selectedDriverTypes = Array.from(document.querySelectorAll('input[name="driverType"]:checked')).map(cb => cb.value);
                    
                    // Get selected statuses
                    const selectedStatuses = Array.from(document.querySelectorAll('input[name="status"]:checked')).map(cb => cb.value);
                    
                    // Custom filter function for simple-datatables
                    dataTable.data.filter((row) => {
                        const driverType = row.cells[2].data.trim();
                        const status = row.cells[4].textContent.trim();
                        
                        // Check if any filters are selected
                        const noDriverTypeFilter = selectedDriverTypes.length === 0;
                        const noStatusFilter = selectedStatuses.length === 0;
                        
                        // Determine if the row matches the filters
                        const driverTypeMatch = noDriverTypeFilter || selectedDriverTypes.some(type => driverType.includes(type));
                        const statusMatch = noStatusFilter || selectedStatuses.some(s => status.includes(s));
                        
                        return driverTypeMatch && statusMatch;
                    });
                    
                    dataTable.update();
                }
            }
        });
    </script>
</body>
</html>
