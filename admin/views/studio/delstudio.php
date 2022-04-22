<?php 
    include('../conn/connection.php');

    if(isset($_POST)){
        $id = $_POST['id'];        
        $sql = "DELETE FROM studio WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }
?>