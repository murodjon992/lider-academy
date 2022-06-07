<?php session_start();
    $conn = mysqli_connect('localhost','root','','webstar');

      echo "<script>window.open('home.php', '_self');</script>";

      session_destroy();
?>