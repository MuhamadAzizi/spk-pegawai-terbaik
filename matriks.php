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
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" />

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.3/r-2.2.9/datatables.min.js"></script>
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
                        <a class="nav-link active" aria-current="page" href="matriks.php">Matriks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hasil.php">Hasil</a>
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
                                    <button type="submit" name="login" class="btn btn-primary">Login</login>
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
    } else if ($_SESSION['status'] == 'pimpinan') {
    ?>
    <main class="container py-5">
        <?php
            include('koneksi.php');

            $result = mysqli_query($conn, "SELECT * FROM matrix");
            if (mysqli_num_rows($result) < 1) {
            ?>
        <span>Data belum ada, silahkan input data kembali. <a href="nilai_keputusan.php">Mulai</a></span>
        <?php
            } else {
            ?>
        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">TABEL NILAI KEPUTUSAN</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <?php

                                    $sql = "SELECT * FROM kriteria";

                                    $result = mysqli_query($conn, $sql);

                                    $bobot = array();
                                    $jenis = array();

                                    while ($row = mysqli_fetch_array($result)) {
                                        array_push($bobot, $row['bobot']);
                                        array_push($jenis, $row['jenis']);

                                    ?>

                            <th scope="col"><?php echo $row['id']; ?></th>

                            <?php

                                    }

                                    ?>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                $sql_t = "SELECT
                                            alternatif.id, alternatif.nama";

                                for ($i = 1; $i <= $_SESSION['num_rows']; $i++) {
                                    $sql_t = $sql_t . ", SUM(CASE WHEN (matrix.id_kriteria='K" . $i . "') THEN matrix.nilai END) AS K" . $i . "";
                                }

                                $sql_t = $sql_t . " FROM matrix INNER JOIN alternatif ON matrix.id_alternatif=alternatif.id GROUP BY alternatif.nama";

                                echo '<br/>';

                                $result = mysqli_query($conn, $sql_t);

                                $matriks = array();

                                $no = 1;
                                while ($row = mysqli_fetch_array($result)) {
                                    $tmp_matriks = array();
                                ?>
                        <tr>
                            <th scope="row"><?php echo $no++ ?></th>
                            <td><?php echo $row['nama'] ?></td>
                            <?php
                                        for ($i = 1; $i <= $_SESSION['num_rows']; $i++) {
                                            array_push($tmp_matriks, $row['K' . $i]);
                                        ?>
                            <td><?php echo $row['K' . $i] ?></td>
                            <?php
                                        }
                                        array_push($matriks, $tmp_matriks);
                                        ?>
                            <td><a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit<?php echo $row['id']; ?>"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="hapus_matriks_id.php?id=<?php echo $row['id'] ?>"><i
                                        class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="modalEdit<?php echo $row['id']; ?>" tabindex="-1"
                            aria-labelledby="modelEditLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Alternatif</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="edit_matriks.php">
                                        <div class="modal-body">
                                            <?php
                                                        $id = $row['id'];
                                                        $sql1 = "SELECT matrix.id AS matrix_id, alternatif.id AS alternatif_id, alternatif.nama AS alternatif, kriteria.nama AS kriteria, matrix.nilai
                                                        FROM matrix
                                                        INNER JOIN alternatif ON matrix.id_alternatif = alternatif.id
                                                        INNER JOIN kriteria ON matrix.id_kriteria = kriteria.id
                                                        WHERE alternatif.id = '$id'";

                                                        $result1 = mysqli_query($conn, $sql1);

                                                        $alternatif = '';
                                                        $i = 1;
                                                        while ($row1 = mysqli_fetch_array($result1)) {
                                                        ?>

                                            <input type="hidden" name="alternatif"
                                                value="<?php echo $row1['alternatif_id']; ?>" />
                                            <div class="mb-3">
                                                <label class="form-label"><?php echo $row1['kriteria'] ?></label>
                                                <input class="form-control" name="nilai<?php echo $i++; ?>"
                                                    type="number" value="<?php echo $row1['nilai'] ?>" />
                                            </div>
                                            <?php
                                                        }
                                                        ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="update" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php
                $suma = array();
                foreach ($matriks as $r) {
                    $tmp_suma = array();
                    foreach ($r as $s) {
                        array_push($tmp_suma, pow($s, 2));
                    }
                    array_push($suma, $tmp_suma);
                }
                // print_r($suma);
                echo '<br/>';

                $sumb = array();
                foreach ($suma as $row) {
                    foreach ($row as $i => $val) {
                        $sumb[$i] = isset($sumb[$i]) ? $sumb[$i] + $val : $val;
                    }
                }

                // print_r($sumb);

                ?>

        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">MATRIKS TERNORMALISASI</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <?php

                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>

                            <th scope="col"><?php echo $row['id']; ?></th>

                            <?php

                                    }

                                    ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                $result = mysqli_query($conn, $sql_t);

                                for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {

                                    $sum_k = 0;
                                    $data = array();
                                    while ($row_k = mysqli_fetch_array($result)) {
                                        $sum_k = $sum_k + pow($row_k['K' . $j], 2);
                                        $data[] = $row_k;
                                    }

                                    $i = 1;
                                    foreach ($data as $d) {
                                ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $d['nama'] ?></td>
                            <?php
                                            for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {
                                            ?>
                            <td><?php echo $d['K' . $j] / sqrt($sumb[$j - 1]) ?></td>
                            <?php
                                            }
                                            ?>
                        </tr>
                        <?php
                                    }
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">MATRIKS TERBOBOT</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <?php

                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_array($result)) {

                                    ?>

                            <th scope="col"><?php echo $row['id']; ?></th>

                            <?php

                                    }

                                    ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                                $result = mysqli_query($conn, $sql_t);

                                $a_w = array();
                                $a_b = array();

                                $matriks_terbobot = array();

                                for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {

                                    $sum_k = 0;
                                    $data = array();
                                    while ($row_k = mysqli_fetch_array($result)) {
                                        $sum_k = $sum_k + pow($row_k['K' . $j], 2);
                                        $data[] = $row_k;
                                    }

                                    $i = 1;
                                    foreach ($data as $d) {
                                ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $d['nama'] ?></td>
                            <?php
                                            $tmp_matriks_terbobot = array();
                                            for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {
                                                $row = ($d['K' . $j] / sqrt($sumb[$j - 1])) * $bobot[$j - 1];
                                                array_push($tmp_matriks_terbobot, $row);
                                            ?>
                            <td><?php echo $row; ?></td>
                            <?php
                                            }
                                            array_push($matriks_terbobot, $tmp_matriks_terbobot);
                                            ?>
                        </tr>
                        <?php
                                    }
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php

                $rows = count($matriks_terbobot);
                $ridx = 0;
                $cidx = 0;

                // print_r($matriks_terbobot);

                $t_matriks_terbobot = array();

                foreach ($matriks_terbobot as $key => $subarr) {
                    foreach ($subarr as $subkey => $subvalue) {
                        $t_matriks_terbobot[$subkey][$key] = $subvalue;
                    }
                }

                // echo '<br/><br/>';

                // print_r($out);

                // foreach ($matriks_terbobot as $rowidx => $row) {
                //     foreach ($row as $colidx => $val) {
                //         $t_matriks_terbobot[$ridx][$cidx] = $val;
                //         $ridx++;
                //         if ($ridx >= $rows) {
                //             $cidx++;
                //             $ridx = 0;
                //         }
                //     }
                // }

                // print_r($t_matriks_terbobot);

                for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {
                    if ($jenis[$j - 1] == 'benefit') {
                        array_push($a_w, min($t_matriks_terbobot[$j - 1]));
                        array_push($a_b, max($t_matriks_terbobot[$j - 1]));
                    } else if ($jenis[$j - 1] == 'cost') {
                        array_push($a_w, max($t_matriks_terbobot[$j - 1]));
                        array_push($a_b, min($t_matriks_terbobot[$j - 1]));
                    }
                }


                ?>
        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">SOLUSI ALTERNATIF</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Solusi Alternatif Terbaik</th>
                            <th scope="col">Solusi Alternatif Terburuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                for ($i = 1; $i <= $_SESSION['num_rows']; $i++) {
                                ?>
                        <tr>
                            <th scope="row"><?php echo "K$i"; ?></th>
                            <td><?php echo $a_b[$i - 1] ?></td>
                            <td><?php echo $a_w[$i - 1] ?></td>
                        </tr>
                        <?php
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">JARAK</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <?php

                            $result = mysqli_query($conn, $sql_t);

                            $s_w = array();
                            $s_b = array();

                            for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {

                                $sum_k = 0;
                                $data = array();
                                while ($row_k = mysqli_fetch_array($result)) {
                                    $sum_k = $sum_k + pow($row_k['K' . $j], 2);
                                    $data[] = $row_k;
                                }

                                $i = 1;
                                foreach ($data as $d) {

                                    $sum_s_w = 0;
                                    $sum_s_b = 0;
                                    for ($j = 1; $j <= $_SESSION['num_rows']; $j++) {
                                        $matriks_terbobot = ($d['K' . $j] / sqrt($sumb[$j - 1])) * $bobot[$j - 1];
                                        $sum_s_w = $sum_s_w + pow(($matriks_terbobot - $a_w[$j - 1]), 2);
                                        $sum_s_b = $sum_s_b + pow(($matriks_terbobot - $a_b[$j - 1]), 2);
                                    }
                                    array_push($s_w, sqrt($sum_s_w));
                                    array_push($s_b, sqrt($sum_s_b));
                                }
                            }

                            ?>
                    <thead>
                        <tr>
                            <th scope="col">Alternatif</th>
                            <th scope="col">Jarak ke Solusi Terbaik</th>
                            <th scope="col">Jarak ke Solusi Terburuk</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                for ($i = 0; $i < count($s_b); $i++) {
                                ?>
                        <tr>
                            <th scope="col"><?php echo $data[$i]['nama'] ?></th>
                            <td><?php echo $s_b[$i] ?></td>
                            <td><?php echo $s_w[$i] ?></td>
                        </tr>
                        <?php
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-3">
            <h2 class="card-header py-5 text-center">URUTAN PERINGKAT</h2>
            <div class="card-body">
                <table id="peringkat" class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $i = 1;
                                $skor_arr = array(
                                    'nama' => array(),
                                    'skor' => array()
                                );
                                foreach ($data as $d) {
                                    $skor = $s_w[$i - 1] / ($s_w[$i - 1] + $s_b[$i - 1]);
                                    array_push($skor_arr['nama'], $d['nama']);
                                    array_push($skor_arr['skor'], $skor);
                                ?>
                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $d['nama'] ?></td>
                            <td><?php echo $skor ?></td>
                        </tr>
                        <?php
                                }
                                $_SESSION['skor'] = $skor_arr;
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

        <a class="btn btn-danger" href="hapus_matriks.php"
            onclick="return confirm('Apakah Anda yakin ingin menghapus seluruh data ini?')"><i
                class="bi bi-trash-fill"></i> Hapus Seluruh Data</a>
        <?php
            }

            ?>
    </main>
    <?php
    }
    ?>

    <script src="assets/js/bootstrap.min.js"></script>
    <script>
    $('document').ready(function() {
        $('.table').DataTable({
            responsive: true,
            columnDefs: [{
                responsivePriority: 1,
                targets: 0
            }, ]
        })
    })
    </script>
</body>

</html>