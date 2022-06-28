<?php 
include 'koneksi.php';
extract($_POST);
$id=$_GET['id'];
mysqli_query( $connect, "DELETE FROM buku1 WHERE id=$id");
header('Location:index.php');
?>