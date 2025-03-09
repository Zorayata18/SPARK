<?php 
include 'fungsi.php';  
include 'konfigurasi.php';  
// Lakukan koneksi ke database di sini (gunakan mysqli atau PDO) 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
// Ambil data dari formulir 
$nim = isset($_POST["NIM"]) ? $_POST["NIM"] : ""; 
$password = isset($_POST["password"]) ? $_POST["password"] : "112"; 
$email = isset($_POST["Email"]) ? $_POST["Email"] : ""; 
$nama = isset($_POST["Nama"]) ? $_POST["Nama"] : ""; 
$prodi = isset($_POST["Prodi"]) ? $_POST["Prodi"] : ""; 
$angkatan = isset($_POST["Angkatan"]) ? $_POST["Angkatan"] : ""; 
// Query untuk menyimpan data ke database 
$query = "INSERT INTO peserta (NIM, password, Email, Nama, Prodi, Angkatan) 
VALUES ('$nim', '$password', '$email', '$nama', '$prodi', '$angkatan')"; 
// Jalankan query 
$result = mysqli_query($conn, $query);
} 
  
?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/> 
        <meta name="description" content="" /> 
        <meta name="author" content="" /> 
        <title>UAS</title> 
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style2.min.css" rel="stylesheet" /> 
        <link href="css/styles2.css" rel="stylesheet" /> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script> 
    </head> 
    <body class="sb-nav-fixed"> 
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark"> 
            <!-- Navbar Brand--> 
            <a class="navbar-brand ps-3">FGD & SIK</a> 
            <!-- Sidebar Toggle--> 
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button> 
        </nav> 
        <div id="layoutSidenav"> 
            <div id="layoutSidenav_nav"> 
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion"> 
                    <div class="sb-sidenav-menu"> 
                        <div class="nav"> 
                            <div class="sb-sidenav-menu-heading">Menu</div> 
                            <a class="nav-link" href="index.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer
alt"></i></div> 
                                Dashboard 
                            </a> 
                            <a class="nav-link" href="pendaftaran.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div> 
                                Pendaftaran 
                            </a> 
                            <a class="nav-link" href="informasi_acara.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div> 
                                Informasi Acara 
                            </a> 
                            <a class="nav-link" href="evaluasi.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div> 
                                Evaluasi Acara 
                            </a> 
                            <a class="nav-link" href="perizinan.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div> 
                                Perizinan Peserta 
                            </a> 
                            <a class="nav-link" href="kontak.php"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-address-book"></i></div> 
                                Contact Person 
                            </a> 
                        </div> 
                    </div> 
                    <div class="sb-sidenav-footer"> 
                        <div class="small">Dibuat Oleh:</div> 
                        DitaVivit2023 
                    </div> 
                </nav> 
            </div> 
            <div id="layoutSidenav_content"> 
                <main> 
                    <div class="card-body"> 
                        <div class="card"> 
                            <div class="card-header" style="background-color: #212529"> 
                                <h1 style="background-color: #212529; color: white; padding:5px;">Tambah Mahasiswa</h1> 
                            </div> 
                            <div class="card-body"> 
                                <form method="post" action=""> 
                                    <div class="form-group"> 
                                        <label for="NIM">NIM:</label> 
                                        <input type="text" class="form-control" name="NIM" required> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="Email">Email:</label> 
                                        <input type="email" class="form-control" name="Email" required> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="Nama">Nama:</label> 
                                        <input type="text" class="form-control" name="Nama" required> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="Prodi">Prodi:</label> 
                                        <input type="text" class="form-control" name="Prodi" required> 
                                    </div> 
                                    <div class="form-group"> 
                                        <label for="Angkatan">Angkatan:</label> 
                                        <input type="text" class="form-control" name="Angkatan" required> 
                                    </div> 
                                    <button type="submit" class="btn btn-primary" style="background color: #212529">Simpan</button> 
                                </form> 
                            </div> 
                        </div> 
                    </div> 
                </main> 
                <footer class="py-4 bg-light mt-auto"> 
                    <div class="container-fluid px-4"> 
                        <div class="d-flex align-items-center justify-content-between small"> 
                            <div class="text-muted">Copyright &copy; Divit 2023</div> 
                            <div> 
                                <a href="#">Privacy Policy</a> 
                                &middot; 
                                <a href="#">Terms &amp; Conditions</a> 
                            </div> 
                        </div> 
                    </div> 
                </footer> 
            </div> 
        </div> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
        <script src="js/scripts.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> 
        <script src="assets/demo/chart-area-demo.js"></script> 
        <script src="assets/demo/chart-bar-demo.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple datatables.min.js" crossorigin="anonymous"></script> 
        <script src="js/datatables-simple-demo.js"></script> 
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
        </body> 
        </html> 
