<?php

session_start();
include('koneksi.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_lgn = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result_lgn = mysqli_query($conn, $sql_lgn);
    $row_lgn = mysqli_fetch_assoc($result_lgn);
    $sql_krit = "SELECT * FROM kriteria";
    $result_krit = mysqli_query($conn, $sql_krit);

    if (mysqli_num_rows($result_lgn) > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['num_rows'] = mysqli_num_rows($result_krit);
        $_SESSION['status'] = $row_lgn['status'];
        header('location:index.php');
    }
}