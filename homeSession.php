<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <?php
        if(isset($_SESSION["username"])){
            echo "Selamat datang " . $_SESSION["username"] . "<br>";
            echo "Anda sebagai " . $_SESSION["role"] . "<br>";
            echo '<a href="sessionLogout.php">Logout<a/>';
        }else{
            echo "Anda belum Login <br>";
            echo '<a href="loginForm.html">Login<a/>';
        }
    ?>
</body>
</html>