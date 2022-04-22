<?php 
    //Panggil Session terlebih dahulu
    include('session.php');
    //Bersihkan dan hancurkan session yang saat ini ada
    session_destroy();
    //Set lokasi kembali ke home
    header("Location:http://localhost/MITIX/home.php");
?>