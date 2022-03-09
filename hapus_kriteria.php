<?php

include('koneksi.php');

$id = $_GET['id'];

$sql = "DELETE FROM kriteria WHERE id='$id'";

mysqli_query($conn, $sql);

header('location:kriteria.php');
