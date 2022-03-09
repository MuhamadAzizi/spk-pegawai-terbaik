<?php

include('koneksi.php');

$nip = $_GET['id'];

$sql = "DELETE FROM alternatif WHERE id='$id'";

mysqli_query($conn, $sql);

header('location:alternatif.php');