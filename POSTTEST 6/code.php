<?php
    $nama = $_POST['nama'];   
    $tahun = $_POST['tahun'];   
    $genre = $_POST['genre'];   
    $durasi = $_POST['durasi'];   
    $rating = $_POST['rating'];
    
    $film = array('nama'=>$nama,'tahun'=>$tahun,'genre'=>$genre,'durasi'=>$durasi,'rating'=>$rating);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include('hasil.css'); ?>
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h3>ADMIN</h3>
            </div>
            <div class="nav" id="small_menu">
                <ul>
                    <li><a href="tampilan1.php">Home</a></li>
                    <li><a href="#streaming">Film</a></li>
                    <li><a href="#about">About Me</a></li>
    
                </ul>
            </div>
            <div class="user">
                <i class="fas fa-bell"></i>
                <i class="fas fa-search"></i>
                <label for="gelapcuy"> 
                <input type="checkbox" id="gelapcuy" />
                </label>
            </div>  
        </div>
    </header>
    <h1 class="h1">DAFTAR FILM TERBARU</h1>
    <table>
        <tr>
            <td>Nama Film</td>
            <td>:</td>
            <td>
                <?php echo $nama; ?>
            </td>
        </tr>
        <tr>
            <td>Tahun Rilis</td>
            <td>:</td>
            <td>
                <?php echo $tahun; ?>
            </td>
        </tr>
        <tr>
            <td>Genre Film</td>
            <td>:</td>
            <td>
                <?php echo $genre; ?>
            </td>
        </tr>
        <tr>
            <td>Durasi Film</td>
            <td>:</td>
            <td>
                <?php echo $durasi; ?>
            </td>
        </tr>
        <tr>
            <td>Rating Film</td>
            <td>:</td>
            <td>
                <?php echo $rating; ?>
            </td>
        </tr>
    </table>
    <p>DATA BERHASIL DITAMBAHKAN !!!</p>
</body>
</html>