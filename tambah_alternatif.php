<?php

include('koneksi.php');

$nip = $_POST['nip'];
$nama = $_POST['nama'];
$pangkat = $_POST['pangkat'];
$golongan = $_POST['golongan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tgl_lahir'];
$jabatan_1 = $_POST['jabatan_1'];
$jabatan_2 = $_POST['jabatan_2'];
$email = $_POST['email'];
$no_hp_1 = $_POST['hp_1'];
$no_hp_2 = $_POST['hp_2'];
$no_npwp = $_POST['npwp'];
$nik = $_POST['nik'];
$alamat_1 = $_POST['alamat_1'];
$alamat_2 = $_POST['alamat_2'];

$sql = "INSERT INTO alternatif (nip, nama, pangkat, golongan, tempat_lahir, tgl_lahir, jabatan_1, jabatan_2, email, hp_1, hp_2, no_npwp, nik, alamat_1, alamat_2) VALUES ('$nip', '$nama', '$pangkat', '$golongan', '$tempat_lahir', '$tanggal_lahir', '$jabatan_1', '$jabatan_2', '$email', '$no_hp_1', '$no_hp_2', '$no_npwp', '$nik', '$alamat_1', '$alamat_2')";
mysqli_query($conn, $sql);
header('location:alternatif.php');