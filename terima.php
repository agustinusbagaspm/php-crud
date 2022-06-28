<?php 
include 'koneksi.php';
extract($_POST);
mysqli_query( $connect, "INSERT INTO buku1 (judul, isbn, penulis, penerbit, tahun)
VALUES ('$judul','$isbn','$penulis','$penerbit','$tahun')");

header('Location:index.php');
?>