<?php
    session_start();
    //constants
    define('HOMEPAGE', 'https://localhost/444Venus/');
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, '444Venus') or die(mysqli_error());
?>