<?php 
    include('../conn/connection.php');

    if(isset($_POST)){
        $id_lokasi = $_POST['lokasi'];
        $stud_no = $_POST['stud_no'];
        $baris = $_POST['jlh_baris'];
        $kolom = $_POST['jlh_kolom'];
        $pattern = $baris.';'.$kolom;
        $sql = "UPDATE studio (id_lokasi, studio_no, pattern_kursi)
                SET lastname='Doe' WHERE ('".$id_lokasi."', '".$stud_no."', '".$pattern."')";

        if (mysqli_query($conn, $sql)) {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }
?>