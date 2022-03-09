<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-device=1.0" />
    <title>SPK Pemilihan Pegawai Terbaik</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/Lambang_Badan_Pusat_Statistik_(BPS)_Indonesia.svg" alt="Logo BPS" width="30"
                    height="24" class="d-inline-block align-text-top">
                SPK Pemilihan Pegawai Terbaik
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="alternatif.php">Alternatif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kriteria.php">Kriteria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nilai_keputusan.php">Nilai Keputusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matriks.php">Matriks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="hasil.php">Hasil</a>
                    </li>
                </ul>
                <?php
                if (empty($_SESSION['status'])) {
                ?>
                <!-- Modal Button -->
                <ul class="navbar-nav">
                    <li>
                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="bi bi-box-arrow-in-left"></i> LOGIN
                        </button>
                    </li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form method="post" action="login.php">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input class="form-control" name="username" type="text" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input class="form-control" name="password" type="password" />
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                } else {
                ?>
                <a class="btn btn-danger" href="logout.php"><i class="bi bi-box-arrow-left"></i> LOGOUT</a>
                <?php
                }
                ?>
            </div>
        </div>
    </nav>
    <?php
    if (empty($_SESSION['status'])) {
    ?>
    <main class="container py-5">
        <span>Anda belum login, silahkan login terlebih dahulu</span>
    </main>
    <?php
    } else if ($_SESSION['status'] == 'kasubag_tu') {
    ?>
    <main class="container py-5">
        <span>Hanya Pimpinan yang dapat mengakses halaman ini</span>
    </main>
    <?php
    } else if ($_SESSION['status'] == "pimpinan") {
    ?>
    <main class="container py-5">
        <center>
            <div class="col-6">
                <p>Berdasarkan hasil keputusan menggunakan SPK TOPSIS, didapatkan hasil bahwa alternatif dengan skor
                    tertinggi jatuh kepada :</p>
                <div class="card">
                    <?php
                        $hasil = $_SESSION['skor'];
                        $skor = $hasil['skor'];
                        $i_best = array_keys($skor, max($skor))[0];
                        ?>
                    <form action="buat_surat.php" method="post">
                        <div class="card-header">
                            <h2><?php echo $hasil['nama'][$i_best]; ?></h2>
                            <input type="hidden" name="nama" value="<?php echo $hasil['nama'][$i_best]; ?>" />
                        </div>
                        <div class="card-body">
                            <span>Skor :</span>
                            <h2><?php echo $skor[$i_best]; ?></h2>
                            <input type="hidden" name="skor" value="<?php echo $skor[$i_best]; ?>" />
                        </div>
                        <div class="card-footer">
                            <center>
                                <div class="mb-3">
                                    <input class="form-control" name="nomor" type="text"
                                        placeholder="Masukkan nomor surat" />
                                </div>
                                <div class="mb-3">
                                    <input class="form-control" name="periode" type="text"
                                        placeholder="Masukkan periode pegawai terbaik" />
                                </div>

                                <button type="submit" name="download" class="btn btn-primary">Unduh Surat
                                    Keputusan</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </center>
    </main>
    <?php
    }
    ?>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>