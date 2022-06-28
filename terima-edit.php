<?php 
include 'koneksi.php';
extract($_POST);
$id=$_GET['id'];
mysqli_query( $connect, "UPDATE buku1 SET judul='$judul', isbn='$isbn', penulis='$penulis', penerbit='$penerbit', tahun='$tahun' WHERE id=$id");
header('Location:index.php');
?>