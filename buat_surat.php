<?php

include('koneksi.php');

if (isset($_POST['download'])) {
    $nama = $_POST['nama'];
    $skor = $_POST['skor'];
    $nomor = $_POST['nomor'];
    $periode = $_POST['periode'];

    $sql = "SELECT * FROM alternatif WHERE nama = '$nama'";
    $result = mysqli_query($conn, $sql);

    $surat = file_get_contents('surat_keputusan.rtf');

    while ($row = mysqli_fetch_array($result)) {
        $surat = str_replace('#NIP', $row['nip'], $surat);
        $surat = str_replace('#JABATAN1', $row['jabatan_1'], $surat);
        $surat = str_replace('#JABATAN2', $row['jabatan_2'], $surat);
    }

    $surat = str_replace('#NAMA', $nama, $surat);
    $surat = str_replace('#SKOR', $skor, $surat);
    $surat = str_replace('#NOMOR', $nomor, $surat);
    $surat = str_replace('#PERIODE', $periode, $surat);

    header('Content-type: application/msword');
    header('Content-disposition: inline; filename=surat_spk.doc');
    header('Content-length: ' . strlen($surat));
    echo $surat;
} else {
    echo "<script>alert('Nomor Surat dan Periode belum dimasukkan')</script>";
    header('location:hasil.php');
}