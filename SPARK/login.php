<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solo Technopark Parking</title>
    <style>
        /* Gaya dasar untuk dropdown */
        .dropdown {
            position: relative;
            width: 100%; /* Lebar dropdown mengikuti parent */
            margin-bottom: 10px; /* Jarak antara dropdown dan tombol Masuk */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            width: 100%; /* Lebar dropdown mengikuti parent */
            border-radius: 5px; /* Sudut melengkung untuk dropdown */
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            cursor: pointer;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .show {
            display: block;
        }

        .hidden {
            display: none;
        }

        /* Gaya untuk tombol */
        .login-button, .role-button {
            width: 100%; /* Lebar tombol 100% */
            padding: 10px;
            background-color: #BA0805; /* Warna tombol merah */
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 16px;
            border-radius: 5px; /* Sudut melengkung untuk tombol */
            transition: background-color 0.3s ease; /* Animasi hover */
        }

        .login-button:hover, .role-button:hover {
            background-color: #A30704; /* Warna hover yang lebih gelap */
        }
    </style>
</head>
<?php  
// Definisikan BASE_URL agar bisa digunakan untuk redirect
define("BASE_URL", "http://localhost/SPARK/");

// Sertakan koneksi database
include_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';

    // Gunakan Prepared Statements untuk keamanan
    $stmt = $koneksi->prepare("SELECT * FROM user WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        header("Location: " . BASE_URL . "index.php?notif=true");
        exit();
    } else {
        session_start();
        $_SESSION["login"] = true;
        header("Location: " . BASE_URL . "dashboard.php");
        exit();
    }
}
?>
<body>
    <div class="cntainer">
        <div class="left-side">
            <div class="overlay"></div>
            <div class="left-cntent-wrapper">
                <img src="foto/Logo.png" alt="Spark Logo" class="lgo">
                <div class="cntent">
                    <h1>Solo Technopark<br>Parking</h1>
                    <p>Parkir kendaraan di UPTD Kawasan Sains dan Teknologi Solo Technopark tanpa karcis!</p>
                </div>
            </div>
        </div>
        <div class="right-side">
            <div class="login-cntainer">
                <h2 class="login-header">Masuk</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="dropdown">
                        <button type="button" class="role-button" onclick="toggleDropdown()">Pilih Role</button>
                        <div id="dropdownMenu" class="dropdown-content">
                            <a onclick="selectRole('User')">User</a>
                            <a onclick="selectRole('Operator')">Operator</a>
                            <a onclick="selectRole('Admin')">Admin</a>
                        </div>
                    </div>
                    <button type="submit" class="login-button">Masuk</button>
                    <p class="register-link hidden" id="registerLink">
                        Belum punya akun? <a href="register.php">Daftar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Fungsi untuk menampilkan atau menyembunyikan dropdown
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }

        // Fungsi untuk memilih role dan mengontrol visibilitas "Belum punya akun? Daftar"
        function selectRole(role) {
            var registerLink = document.getElementById("registerLink");

            if (role === "User") {
                registerLink.classList.remove("hidden"); // Tampilkan untuk User
            } else {
                registerLink.classList.add("hidden"); // Sembunyikan untuk Operator dan Admin
            }

            // Tutup dropdown setelah memilih
            toggleDropdown();
        }

        // Menutup dropdown jika pengguna mengklik di luar dropdown
        window.onclick = function(event) {
            if (!event.target.matches('.role-button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
