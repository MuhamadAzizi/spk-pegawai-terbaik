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
                        <a class="nav-link active" aria-current="page" href="alternatif.php">Alternatif</a>
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
    } else if ($_SESSION['status'] == "pimpinan") {
    ?>
    <main class="container py-5">
        <span>Hanya Kasubag TU yang dapat mengakses halaman ini</span>
    </main>
    <?php
    } else if ($_SESSION['status'] == 'kasubag_tu') {
    ?>
    <main class="container py-5">
        <form class="card mb-3" method="post" action="tambah_alternatif.php">
            <h2 class="card-header py-5 text-center">TAMBAH ALTERNATIF</h2>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">NIP</label>
                    <input class="form-control" name="nip" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input class="form-control" name="nama" type="text" />
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Pangkat</label>
                        <input class="form-control" name="pangkat" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">Golongan</label>
                        <input class="form-control" name="golongan" type="text" />
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Tempat Lahir</label>
                        <input class="form-control" name="tempat_lahir" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">Tanggal Lahir</label>
                        <input class="form-control" name="tgl_lahir" type="date" />
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">Jabatan 1</label>
                        <input class="form-control" name="jabatan_1" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">Jabatan 2</label>
                        <input class="form-control" name="jabatan_2" type="text" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input class="form-control" name="email" type="text" />
                </div>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <label class="form-label">No HP 1</label>
                        <input class="form-control" name="hp_1" type="text" />
                    </div>
                    <div class="col">
                        <label class="form-label">No HP 2</label>
                        <input class="form-control" name="hp_2" type="text" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">No NPWP</label>
                    <input class="form-control" name="npwp" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">NIK</label>
                    <input class="form-control" name="nik" type="text" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat 1</label>
                    <textarea class="form-control" name="alamat_1"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat 2</label>
                    <textarea class="form-control" name="alamat_2"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;"><i class="bi bi-save-fill"></i>
                    Simpan</button>
            </div>
        </form>

        <div class="card">
            <h2 class="card-header text-center py-5">TABEL ALTERNATIF</h2>
            <div class="card-body">
                <table class="table nowrap" style="width: 100%;">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIP</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Pangkat</th>
                            <th scope="col">Golongan</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jabatan 1</th>
                            <th scope="col">Jabatan 2</th>
                            <th scope="col">Email</th>
                            <th scope="col">No HP 1</th>
                            <th scope="col">No HP 2</th>
                            <th scope="col">NPWP</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Alamat 1</th>
                            <th scope="col">Alamat 2</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                            include('koneksi.php');

                            $sql = 'SELECT * FROM alternatif';
                            $result = mysqli_query($conn, $sql);

                            $i = 1;
                            while ($row = mysqli_fetch_array($result)) {

                            ?>

                        <tr>
                            <th scope="row"><?php echo $i++ ?></th>
                            <td><?php echo $row['nip'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['pangkat'] ?></td>
                            <td><?php echo $row['golongan'] ?></td>
                            <td><?php echo $row['tempat_lahir'] ?></td>
                            <td><?php echo $row['tgl_lahir'] ?></td>
                            <td><?php echo $row['jabatan_1'] ?></td>
                            <td><?php echo $row['jabatan_2'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['hp_1'] ?></td>
                            <td><?php echo $row['hp_2'] ?></td>
                            <td><?php echo $row['no_npwp'] ?></td>
                            <td><?php echo $row['nik'] ?></td>
                            <td><?php echo $row['alamat_1'] ?></td>
                            <td><?php echo $row['alamat_2'] ?></td>
                            <td>
                                <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#modalEdit<?php echo $row['id']; ?>"><i
                                        class="bi bi-pencil-square"></i> Edit</a>
                                <a class="btn btn-danger" href="hapus_alternatif.php?nip=<?php echo $row['id'] ?>"
                                    onclick="return confirm('Apakah anda ingin menghapus alternatif <?php echo $row['nama'] ?>')"><i
                                        class="bi bi-trash-fill"></i> Hapus</a>
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
                                    <form method="post" action="edit_alternatif.php">
                                        <div class="modal-body">
                                            <?php
                                                    $id = $row['id'];
                                                    $sql1 = "SELECT * FROM alternatif WHERE id = '$id'";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                    while ($row1 = mysqli_fetch_array($result1)) {
                                                    ?>
                                            <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                                            <div class="mb-3">
                                                <label class="form-label">NIP</label>
                                                <input class="form-control" name="nip" type="text"
                                                    value="<?php echo $row1['nip']; ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Nama</label>
                                                <input class="form-control" name="nama" type="text"
                                                    value="<?php echo $row1['nama'] ?>" />
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col">
                                                    <label class="form-label">Pangkat</label>
                                                    <input class="form-control" name="pangkat" type="text"
                                                        value="<?php echo $row1['pangkat'] ?>" />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Golongan</label>
                                                    <input class="form-control" name="golongan" type="text"
                                                        value="<?php echo $row1['golongan'] ?>" />
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col">
                                                    <label class="form-label">Tempat Lahir</label>
                                                    <input class="form-control" name="tempat_lahir" type="text"
                                                        value="<?php echo $row1['tempat_lahir'] ?>" />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Tanggal Lahir</label>
                                                    <input class="form-control" name="tgl_lahir" type="date"
                                                        value="<?php echo $row1['tgl_lahir'] ?>" />
                                                </div>
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col">
                                                    <label class="form-label">Jabatan 1</label>
                                                    <input class="form-control" name="jabatan_1" type="text"
                                                        value="<?php echo $row1['jabatan_1'] ?>" />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">Jabatan 2</label>
                                                    <input class="form-control" name="jabatan_2" type="text"
                                                        value="<?php echo $row1['jabatan_2'] ?>" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" name="email" type="text"
                                                    value="<?php echo $row1['email'] ?>" />
                                            </div>
                                            <div class="row g-3 mb-3">
                                                <div class="col">
                                                    <label class="form-label">No HP 1</label>
                                                    <input class="form-control" name="hp_1" type="text"
                                                        value="<?php echo $row1['hp_1'] ?>" />
                                                </div>
                                                <div class="col">
                                                    <label class="form-label">No HP 2</label>
                                                    <input class="form-control" name="hp_2" type="text"
                                                        value="<?php echo $row1['hp_2'] ?>" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">No NPWP</label>
                                                <input class="form-control" name="npwp" type="text"
                                                    value="<?php echo $row1['no_npwp'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">NIK</label>
                                                <input class="form-control" name="nik" type="text"
                                                    value="<?php echo $row1['nik'] ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat 1</label>
                                                <textarea class="form-control"
                                                    name="alamat_1"><?php echo $row1['alamat_1'] ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Alamat 2</label>
                                                <textarea class="form-control"
                                                    name="alamat_2"><?php echo $row1['alamat_2'] ?></textarea>
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
                targets: 1
            }, ]
        })
    })
    </script>
</body>

</html>