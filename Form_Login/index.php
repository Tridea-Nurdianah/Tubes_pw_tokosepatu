<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        echo "<script>alert('Login Dahulu');</script>";
        echo "<script>window.location.replace('login.php');</script>";
    }
?>

Selamat Datang <b><?php echo $_SESSION['email']; ?></b>  <a href="logout.php"> Logout </a>