<?php 
    include('../conn/connection.php');
    session_start();
    if(isset($_POST)){
        $wilayah = $_POST['wilayah'];
        $nama_lokasi = $_POST['nama_lokasi'];
        $sql = "INSERT INTO lokasi (wilayah,nama_lokasi)
                VALUES ('".$wilayah."', '".$nama_lokasi."')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Location berhasil ditambahkan";
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }
?>