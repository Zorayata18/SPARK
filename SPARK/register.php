<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Solo Technopark Parking</title>
</head>
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
                <h2 class="login-header">Daftar</h2>
                <form action="login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">No. Telepon</label>
                        <input type="nomor" id="telp" name="telp" placeholder="Masukkan No. Telepon" required>
                    </div>
                    <button type="submit" class="login-button" href="dashboard.php">Masuk</button>
                    <p class="register-link">
                        Belum punya akun? <a href="login.php">Masuk</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>