<?php
    require "admin.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
          <h1>Login Admin</h1>
            <form method="POST" action="tampilan1.php">

                <!-- tipe hidden tidak akan tampil pada website --> 
                <input name="user" type="hidden" value="LOGIN1" >

                <label>Username</label>
                <br>
                <input name="username" type="text">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <p>Login Sebagai User,</p><a href='index.php'>Klik disini</a>
                <button>Log In</button>
                
            </form>
        </div>
    </body>
</html>