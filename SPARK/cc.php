<?php
// Database connection
include 'koneksi.php';

// Pagination
$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Search functionality
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Query to get total number of records
$countQuery = "SELECT COUNT(*) AS count FROM users 
               WHERE username LIKE '%$search%' 
               OR email LIKE '%$search%' 
               OR jenis_pengendara LIKE '%$search%'";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalRecords = $countRow['count'];

// Calculate total pages
$totalPages = ceil($totalRecords / $limit);

// Main query to fetch users
$query = "SELECT * FROM users 
          WHERE username LIKE '%$search%' 
          OR email LIKE '%$search%' 
          OR jenis_pengendara LIKE '%$search%'
          LIMIT $start, $limit";
$result = mysqli_query($conn, $query);
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
<style>
    .dropdown-item.active {
        color: black !important;
        font-weight: 500;
    }
</style>
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
                            <p class="sidebartext font-bold sm:block"><a href="adm_ManUs.php">Dashboard</a></p>
                        </li>
                        <div class="sidebar-item relative">
                            <button id="manage-dropdown-toggle" class="w-full flex items-center flex gap-3 items-center text-gray-900 bg-gray-200 p-2 rounded">
                                <div class="icon-container text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                        <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                        <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                    </svg>
                                </div>
                                <span class="text-gray-700 text-sm">Manage</span>
                                <svg id="dropdown-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3 ml-auto text-gray-500 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>                            
                            <div id="dropdown-menu" class="dropdown-menu pl-7 flex flex-col text-xs pt-1 hidden">
                                <a href="adm_Peng.php" class="dropdown-item flex <?php echo (basename($_SERVER['PHP_SELF']) == 'adm_Peng.php') ? 'font-bold text-black' : 'text-gray-600'; ?> py-1 hover:text-black">Pengguna</a>
                                <a href="adm_Operator.php" class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'adm_Operator.php') ? 'font-bold text-black' : 'text-gray-600'; ?> py-1 hover:text-black">Operator</a>
                                <a href="adm_Admin.php" class="dropdown-item <?php echo (basename($_SERVER['PHP_SELF']) == 'adm_Admin.php') ? 'font-bold text-black' : 'text-gray-600'; ?> py-1 hover:text-black">Admin</a>
                            </div>
                        </div>
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
                            <button class="btn p-2 px-6 bg-red-600 rounded text-white mt-80 hover:border-4 hover:p-1 hover:px-5 hover:cursor-pointer block hover:border-red-600 hover:bg-white hover:text-red-600 transition duration-200 ease-in-out md:hidden">Keluar</button>
                        </li>
                    </ul>
                </div>
                <div class="Sidebar2 w-1/4 bg-gray-800 h-screen block opacity-25 md:hidden"></div>
            </div>
            <!-- Konten -->
            <div class="content w-full md:w-4/5 ml-auto px-6 py-8 bg-gray-200 min-h-screen">
                <div class="container mx-auto">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h1 class="text-2xl font-bold text-gray-800">All Users</h1>
                            <button id="addUserBtn" class="bg-red-600 text-white px-4 py-2 rounded-md flex items-center hover:bg-red-700 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                </svg>
                                Add
                            </button>
                        </div>
                        
                        <form method="GET" class="flex items-center mb-4 space-x-4">
                            <div class="relative flex-grow">
                                <input type="text" name="search" placeholder="Cari" value="<?php echo htmlspecialchars($search); ?>" 
                                    class="w-full pl-10 pr-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"/>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <button type="submit" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-md flex items-center hover:bg-gray-300 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                </svg>
                                Filter
                            </button>
                        </form>
                        
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead class="bg-gray-100 border-b">
                                    <tr>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Username</th>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jenis Pengendara</th>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nomor Telepon</th>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        <th class="p-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php 
                                    $start_record = ($page - 1) * $limit + 1;
                                    $end_record = min($start_record + $limit - 1, $totalRecords);
                                    
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { 
                                    ?>
                                        <tr>
                                            <td class="p-3 whitespace-nowrap"><?php echo htmlspecialchars($row['username']); ?></td>
                                            <td class="p-3 whitespace-nowrap"><?php echo htmlspecialchars($row['email']); ?></td>
                                            <td class="p-3 whitespace-nowrap"><?php echo htmlspecialchars($row['jenis_pengendara']); ?></td>
                                            <td class="p-3 whitespace-nowrap"><?php echo htmlspecialchars($row['nomor_telepon']); ?></td>
                                            <td class="p-3">
                                                <span class="px-2 py-1 <?php echo $row['status'] == 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'; ?> rounded-full text-xs">
                                                    <?php echo htmlspecialchars($row['status']); ?>
                                                </span>
                                            </td>
                                            <td class="p-3 flex space-x-2">
                                                <button onclick="editUser(<?php echo $row['id']; ?>)" class="text-blue-600 hover:text-blue-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </button>
                                                <button onclick="deleteUser(<?php echo $row['id']; ?>)" class="text-red-600 hover:text-red-900">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php 
                                        }
                                    } else {
                                    ?>
                                        <tr>
                                            <td colspan="6" class="p-3 text-center text-gray-500">No users found</td>
                                        </tr>
                                    <?php 
                                    } 
                                    ?>
                                </tbody>
                            </table>
                            <div class="flex justify-between items-center mt-4 text-sm text-gray-600">
                                <span><?php echo "$start_record-$end_record of $totalRecords"; ?></span>
                                <div class="space-x-2">
                                    <?php if($page > 1) { ?>
                                        <a href="?page=<?php echo $page-1; ?>&search=<?php echo urlencode($search); ?>" class="bg-gray-200 px-3 py-1 rounded">&lt;</a>
                                    <?php } ?>
                                    <?php if($page < $totalPages) { ?>
                                        <a href="?page=<?php echo $page+1; ?>&search=<?php echo urlencode($search); ?>" class="bg-gray-200 px-3 py-1 rounded">&gt;</a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Add User -->
            <div id="addUserModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 justify-center items-center">
                <div class="bg-white p-6 rounded-lg w-96">
                    <h2 class="text-xl font-bold mb-4">Add New User</h2>
                    <form id="addUserForm">
                        <input type="text" name="username" placeholder="Username" class="w-full mb-2 p-2 border rounded">
                        <input type="email" name="email" placeholder="Email" class="w-full mb-2 p-2 border rounded">
                        <select name="jenis_pengendara" class="w-full mb-2 p-2 border rounded">
                            <option value="">Select Jenis Pengendara</option>
                            <option value="Magang/PKL">Magang/PKL</option>
                        </select>
                        <input type="tel" name="nomor_telepon" placeholder="Nomor Telepon" class="w-full mb-2 p-2 border rounded">
                        <div class="flex justify-end space-x-2">
                            <button type="button" id="closeAddModal" class="bg-gray-200 px-4 py-2 rounded">Cancel</button>
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded">Save</button>
                        </div>
                    </form>
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
    // Dropdown toggle functionality
        document.getElementById('manage-dropdown-toggle').addEventListener('click', function() {
            const dropdownMenu = document.getElementById('dropdown-menu');
            const dropdownArrow = document.getElementById('dropdown-arrow');
            
            // Toggle the dropdown menu
            dropdownMenu.classList.toggle('hidden');
            
            // Rotate arrow when dropdown is open
            if (dropdownMenu.classList.contains('hidden')) {
                dropdownArrow.style.transform = 'rotate(0deg)';
            } else {
                dropdownArrow.style.transform = 'rotate(180deg)';
            }
        });
        
        // Make dropdown items turn black when clicked
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Hapus class active dari semua item
                dropdownItems.forEach(i => i.classList.remove('active'));

                // Tambahkan class active ke item yang diklik
                this.classList.add('active');
            });
        });
    </script>
    <script>
    // Add User Modal Functionality
        const addUserBtn = document.getElementById('addUserBtn');
        const addUserModal = document.getElementById('addUserModal');
        const closeAddModal = document.getElementById('closeAddModal');

        addUserBtn.addEventListener('click', () => {
            addUserModal.classList.remove('hidden');
            addUserModal.classList.add('flex');
        });

        closeAddModal.addEventListener('click', () => {
            addUserModal.classList.remove('flex');
            addUserModal.classList.add('hidden');
        });

        // Add User Form Submission
        document.getElementById('addUserForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // AJAX call to handle user addition
            fetch('add_user.php', {
                method: 'POST',
                body: new FormData(this)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('User added successfully');
                    location.reload();
                } else {
                    alert('Error: ' + data.message);
                }
            });
        });

        // Edit User Function
        function editUser(id) {
            // Redirect to edit page or open edit modal
            window.location.href = 'edit_user.php?id=' + id;
        }

        // Delete User Function
        function deleteUser(id) {
            if (confirm('Are you sure you want to delete this user?')) {
                fetch('delete_user.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: 'id=' + id
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('User deleted successfully');
                        location.reload();
                    } else {
                        alert('Error: ' + data.message);
                    }
                });
            }
        }
    </script>
</body>
</html>