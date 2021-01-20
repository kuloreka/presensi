<?php
require 'common.php';

//Grab all the users from our database
$siswa = $database->select("siswa", [
    'id',
    'nama',
    'kode_rfid'
]);

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
        <div class="row">
            <h2>Siswa</h2>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No. Absen</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode RFID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //Loop through and list all the information of each user including their RFID UID
                foreach($siswa as $user) {
                    echo '<tr>';
                    echo '<td scope="row">' . $user['id'] . '</td>';
                    echo '<td>' . $user['nama'] . '</td>';
                    echo '<td>' . $user['kode_rfid'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</html>