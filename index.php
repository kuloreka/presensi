<?php
require 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sistem Monitoring Presensi Siswa</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Sistem Presensi</a>
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a href="presensi.php" class="nav-link">Lihat Data Presensi</a>
            </li>
            <li class="nav-item">
                <a href="siswa.php" class="nav-link active">Lihat Data Siswa</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="col-md-6 order-md-1 text-center text-md-left pr-md-5">
            <h1 class="mb-3">Selamat Datang,</h1>
            <p class="lead">
                To your <a href="https://pimylifeup.com">Pi My Life Up</a> RFID Attendance System Dashboard.
            </p>
            <div class="row mx-n2">
                <div class="col-md px-2">
                    <a href="siswa.php" class="btn btn-lg btn-outline-secondary w-100 mb-3">Users</a>
                </div>
                <div class="col-md px-2">
                    <a href="presensi.php" class="btn btn-lg btn-outline-secondary w-100 mb-3" >Attendance</a>
                </div>
            </div>
        </div>
    </div>
</html>