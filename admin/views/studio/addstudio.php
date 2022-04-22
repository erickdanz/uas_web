<?php 
    include('../conn/connection.php');
    session_start();
    if(isset($_POST)){
        $id_lokasi = $_POST['lokasi'];
        $stud_no = $_POST['stud_no'];
        $baris = $_POST['jlh_baris'];
        $kolom = $_POST['jlh_kolom'];
        $pattern = $baris.';'.$kolom;
        $sql = "INSERT INTO studio (id_lokasi, studio_no, pattern_kursi)
                VALUES ('".$id_lokasi."', '".$stud_no."', '".$pattern."')";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['success'] = "Studio berhasil ditambahkan";
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }
?>