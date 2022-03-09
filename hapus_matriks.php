<?php

include('koneksi.php');

$sql = "DELETE FROM matrix";

mysqli_query($conn, $sql);

header('location:matriks.php');
