<?php 
if(isset($_POST["user"])){
        $admin = array('user' => '123');
        
        
        $username = isset($_POST['username']) ;
        $password = isset($_POST['password']) ;


        $tujuan = $_POST["user"];
        
        if($tujuan == "LOGIN1"){
            // $username = $_POST["username"];
            // $password = $_POST["password"];
            
            /* logika sederhana admin */
            if($username == "user" && $password == "123"){
                header ("location:tampilan.php");
            }
            // } else if($username == "user" && $password == "123"){
            //     header ("location:tampilan.html");
            //     exit;
            }
            
            else{
                echo "<h2>Username atau Password Salah!</h2>";
            }
    
            
        }
       
?>