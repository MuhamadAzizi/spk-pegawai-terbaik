<?php

session_start();

include('koneksi.php');

$id = $_POST['id_alternatif'];
$rows = $_POST['num_rows'];

if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM matrix WHERE id_alternatif=$id")) > 0) {
    $_SESSION['pesan'] = "Data sudah ada, silahkan input data yang lain";
} else {
    $sql = "INSERT INTO matrix VALUES";

    for ($i = 1; $i <= $rows; $i++) {
        $nilai = $_POST['nilai_K' . $i];
        $sql = $sql . " (NULL, $id, 'K" . $i . "', $nilai), ";
    }

    $sql =  rtrim($sql, ', ');
    mysqli_query($conn, $sql);
}

header('location:nilai_keputusan.php');
