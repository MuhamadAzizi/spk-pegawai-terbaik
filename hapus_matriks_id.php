<?php

include('koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM matrix WHERE id_alternatif='$id'";

mysqli_query($conn, $sql);

header('location:matriks.php');
