<?php

include('koneksi.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $kriteria = $_POST['kriteria'];
    $bobot = $_POST['bobot'];
    $jenis = $_POST['jenis'];

    $sql = "UPDATE kriteria SET nama='$kriteria', bobot=$bobot, jenis='$jenis' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header('location:kriteria.php');
}