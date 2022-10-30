<?php
require 'koneksi.php';
// Connect to MySQL database
// Get the page via GET request (URL param: page), if non exists default the page to 1

$data = [];

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$film = mysqli_query($conn,'SELECT * FROM data_film' );

// Fetch the records so we can display them in our template.
while ($baris= mysqli_fetch_assoc($film)){
    $data []= $baris;
    

}

// Get the total number of contacts, this is so we can determine whether there should be a next and previous button

?>


<?=template_header('Read')?>

<div class="content read">
	<h2>Read Contacts</h2>
	<a href="create.php" class="create-contact">Create Contact</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Judul</td>
                <td>Tahun</td>
                <td>Genre</td>
                <td>Durasi</td>
                <td>Rating</td>
                <td>Gambar</td>
                <td>Keterangan</td>

                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $data): ?>
            <tr>
                <td><?=$data['id']?></td>
                <td><?=$data['nama']?></td>
                <td><?=$data['tahun']?></td>
                <td><?=$data['genre']?></td>
                <td><?=$data['durasi']?></td>
                <td><?=$data['rating']?></td>
                <td><img src="gambar/<?=$data['upload']?>" width="150px"></td>
                               
                <td><?=$data['keterangan']?></td>
                
                <td class="actions">
                    <a href="update.php?id=<?=$data['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$data['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	
		
	</div>
</div>

<?=template_footer()?>