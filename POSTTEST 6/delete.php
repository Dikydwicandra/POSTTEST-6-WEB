<?php
require 'koneksi.php';
$id = $_GET ['id'];
$data = [];
$delete = mysqli_query($conn,"SELECT UPLOAD FROM data_film WHERE id= $id" );
$baris= mysqli_fetch_assoc($delete);

unlink("gambar/".$baris['UPLOAD']);

$film =  mysqli_query ($conn,"DELETE FROM data_film where id= $id ");

if ($film){
    header ("location: read.php");

}
?>

