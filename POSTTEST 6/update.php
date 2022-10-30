<?php
require 'koneksi.php';

// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    $id = $_GET ['id'];
    $film = mysqli_query($conn,"SELECT * FROM data_film where id= $id ");
    $data = mysqli_fetch_assoc($film);
    
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        unlink("gambar/".$data['upload']);
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
        $genre = isset($_POST['genre']) ? $_POST['genre'] : '';
        $durasi = isset($_POST['durasi']) ? $_POST['durasi'] : '';
        $rating = isset($_POST['rating']) ? $_POST['rating'] : '';
        $keterangan =date('Y-m-d');
        $file= $_FILES['upload'] ['name'];
        $ekstensi = explode('.',$file);
    

        $tipe= $_FILES['upload']['type'];
        $temp = $_FILES["upload"]["tmp_name"];
        $folder = "gambar/" ;
        $upload= "$nama.$ekstensi[1]";
        

        
        $result = mysqli_query ($conn,"UPDATE data_film SET nama = '$nama', tahun = '$tahun' , genre = '$genre', durasi = '$durasi', rating= '$rating', upload= '$upload', keterangan='$keterangan' WHERE id = $id");
        if($result) {
            move_uploaded_file($temp, 'gambar/'.$upload);
            echo "
                <script>
                alert('Data Berhasil Ditambah');
                </script>
            ";
            header("location: read.php");
    
        } else {
                echo "
                    <script>
                    alert('Data Gagal Ditambah');
                    </script>
                ";
            }
        
    }
}
    // Get the contact from the contacts table
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Film #<?=$data['id']?></h2>
    <form action="update.php?id=<?=$data['id']?>" method="post"enctype='multipart/form-data'>
        <label for="id">ID</label>
        <label for="nama">Judul</label>
        <input type="text" name="id" value="<?=$data['id']?>" id="id">
        <input type="text" name="nama" value="<?=$data['nama']?>" id="nama">
        <label for="tahun">Tahun</label>
        <label for="genre">Genre</label>
        <input type="number" name="tahun" value="<?=$data['tahun']?>" id="tahun">
        <input type="text" name="genre" value="<?=$data['genre']?>" id="genre">
        <label for="durasi">Durasi</label>
        <input type="number" name="durasi" value="<?=$data['durasi']?>" id="durasi">
        <label for="rating">Rating</label>
        <input type="number" name="rating" value="<?=$data['rating']?>" id="rating">
        <label for="upload">Masukan Foto</label>
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Update">
    </form>
   
</div>

<?=template_footer()?>