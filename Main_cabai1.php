<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Main Cabai 1</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>
    <?php
    $servername = "localhost"; // Ganti dengan alamat server database Anda
    $username = "id21005724_renrehan";    // Ganti dengan username untuk mengakses database
    $password = "Ayambakar77.";    // Ganti dengan password untuk mengakses database
    $dbname = "id21005724_sensorweb"; // Ganti dengan nama database yang ingin Anda akses

                    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username, $password, $dbname);

        // Memeriksa koneksi
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Monitoring Tinggi Cabai</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Realtime
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tinggit.html">Ketinggian Tanaman</a>
                                    <a class="nav-link" href="foto.php">Foto Tanaman</a>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Renchons
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                        <main>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>tanggal</th>
                                            <th>tinggi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include 'cabai1.php'; // Memanggil data dari database ?>
                                        <?php foreach ($datacb1 as $rowcb1): ?>
                                            <tr>
                                                <td><?= $rowcb1['tanggal']; ?></td>
                                                <td><?= $rowcb1['tinggi']. " cm"; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-area me-1"></i>
                                Grafik Pertumbuhan Tanaman cabai
                            </div>
                                <div class="card-body"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                                </div>


                                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                <?php
                                        // Menggunakan include untuk menyisipkan file get_data.php
                                        include 'chartcabai1.php';

                                        // Mengonversi data ke format JSON
                                        $json_data = json_encode($datac1);
                                        ?>
                                <?php
                                        // Menggunakan include untuk menyisipkan file get_data.php
                                        include 'chartcabai11.php';

                                        // Mengonversi data ke format JSON
                                        $json_datac11 = json_encode($datac11);
                                        ?>
                                <script>

                                     // Data untuk grafik area (misalnya data pertumbuhan tanaman cabai)
                                        var datatinggi = <?php include 'chartcabai1.php'; echo $json_data; ?>;
                                        var datatanggal = <?php include 'chartcabai11.php'; echo $json_datac11; ?>;
                                        
                                        var dataPertumbuhanTanaman = {
                                            
                                            labels: datatanggal,
                                            datasets: [{
                                                label: "Pertumbuhan Tanaman Cabai",
                                                backgroundColor: "rgba(75, 192, 192, 0.2)",
                                                borderColor: "rgba(75, 192, 192, 1)",
                                                borderWidth: 1,
                                                data: datatinggi, // Memasukkan data dari database
                                            }]
                                        };

                                        // Pengaturan konfigurasi grafik area
                                        var config = {
                                            type: 'line',
                                            data: dataPertumbuhanTanaman,
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        };
                                // Membuat grafik area menggunakan Chart.js
                                var myAreaChart = new Chart(document.getElementById('myAreaChart'), config);
                            </script>

                        </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Renchons</div>
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
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
