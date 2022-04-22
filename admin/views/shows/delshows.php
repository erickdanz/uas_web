<?php 
    include('../conn/connection.php');
    $shows_id = $_GET['id_shows'];

    $sql = "DELETE FROM jadwalpenayangan WHERE id = $shows_id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        return header('Location: ' . $_SERVER['HTTP_REFERER']);
    } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        die();
    }
?>