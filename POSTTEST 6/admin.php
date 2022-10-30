<?php 
if(isset($_POST["tujuan"])){
        $admin = array('admin' => '123');
        
        
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';


        $tujuan = $_POST["tujuan"];
        
        if($tujuan == "LOGIN"){
            // $username = $_POST["username"];
            // $password = $_POST["password"];
            
            /* logika sederhana admin */
            if($username == "admin" && $password == "123"){
                header ("location:tampilan1.php");
            }
            // } else if($username == "user" && $password == "123"){
            //     header ("location:tampilan.html");
            //     exit;
            }
            
            else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
        // }else{
        //     $username = $_POST["username"];
        //     $password = $_POST["password"];
        //     $email = $_POST["email"];
    
            echo "<h1>Anda sudah terdaftar sebagai ".$username."!</h1>";
            
        }
      
?>