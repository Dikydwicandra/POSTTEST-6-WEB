<?php 
    $server = 'localhost';
    $user = 'root' ;
    $password = '' ;
    $db_name = 'datafilm';

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if (!$conn) {
        die("Gagal Terhubung ke : " .mysqli_connect_error());
    }
 function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style1.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website CRUD</h1>
            <a href="tampilan1.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read.php"><i class="fas fa-address-book"></i>Contacts</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>