<?php
require 'koneksi.php';

// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = $_POST['nama'] ;
    $tahun =$_POST['tahun'] ;
    $genre = $_POST['genre'];
    $durasi = $_POST['durasi'] ;
    $rating = $_POST['rating'];
    $keterangan =date('Y-m-d');
    $file= $_FILES['upload'] ['name'];
    $ekstensi = explode('.',$file);
   

    $tipe= $_FILES['upload']['type'];
    $temp = $_FILES["upload"]["tmp_name"];
    $folder = "gambar/" ;
    $upload= "$nama.$ekstensi[1]";
    


    // Insert new record into the contacts table
    $result= mysqli_query($conn,"INSERT INTO data_film VALUES ('','$nama', '$tahun', '$genre', '$durasi', '$rating',  '$upload',date '$keterangan' )");
    if($result) {
        move_uploaded_file($temp, 'gambar/'.$upload);
        echo "
            <script>
            alert('Data Berhasil Ditambah');
            </script>
        ";
        header('Location: create.php');

    } else {
            echo "
                <script>
                alert('Data Gagal Ditambah');
                </script>
            ";
        }
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
	<h2>Create Contact</h2>
    <form action="create.php" method="post" enctype='multipart/form-data'>
        <label for="id">ID</label>

        <label for="nama">Judul</label>
        <input type="text" name="id" value="auto" id="id">
        <input type="text" name="nama" id="nama">
        <label for="tahun">Tahun</label>
        <label for="genre">Genre</label>
        <input type="number" name="tahun" id="tahun">
        <input type="text" name="genre" id="notelp">
        <label for="durasi">Durasi</label>
        <input type="number" name="durasi" id="durasi">
        <label for="rating">Rating</label>
        <input type="number" name="rating" id="rating">
        <label for="upload">Masukan Foto</label>
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Create">
        
    </form>
   
</div>

<?=template_footer()?>