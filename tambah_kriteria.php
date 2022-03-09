<?php

include('koneksi.php');

$id = $_POST['id'];
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$jenis = $_POST['jenis'];

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM matrix")) > 0) {
    echo '<p>Maaf, silahkan hapus seluruh data pada halaman nilai keputusan terlebih dahulu sebelum dapat menambahkan kriteria. <a href="kriteria.php">Kembali ke halaman sebelumnya</a></p>';
} else {
    $sql = "INSERT INTO kriteria VALUES('$id', '$kriteria', $bobot, '$jenis')";
    mysqli_query($conn, $sql);
    header('location:kriteria.php');
}
