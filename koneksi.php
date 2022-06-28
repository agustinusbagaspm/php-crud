<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "moa-buku";

$connect = mysqli_connect( $servername, $username, $password, $database);

if(mysqli_connect_errno()){
    echo "koneksi GAGAL";
}

?>