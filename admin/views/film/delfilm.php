<?php
     include('../conn/connection.php');
    if(isset($_POST)){
        $id_film = $_POST['id_film'];

        $sql = "DELETE from film where id = $id_film";
        if (mysqli_query($conn, $sql)) {
            return header('Location: http://localhost/MITIX/admin/views/index.php');
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }

?>