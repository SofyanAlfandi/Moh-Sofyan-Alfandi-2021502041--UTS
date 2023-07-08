<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'perpus';

    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if($conn){
        //echo "koneksi Berhasil";
    }

    mysqli_select_db($conn, $db);
?>