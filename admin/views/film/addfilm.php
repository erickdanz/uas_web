<?php 
    include ('../conn/connection.php');
    if(isset($_POST)){
        $base_url="http://".$_SERVER['SERVER_NAME'].'/MITIX/images/';

        $allow_type = array("jpg","jpeg","png","svg");

        $judul = $_POST['judul'];
        // $stdr = $_POST['sutradara'];
        // $aktor = $_POST['aktor'];
        $link = $_POST['l_trailer'];
        $cat = $_POST['category'];
        $tgl_rilis = $_POST['rilis'];
        $desc = $_POST['desc'];
        $film_pic = $_FILES['film_pic'];
        
        $film_ext = explode('/',$film_pic['type']); //Type dari si film, kita ubah menjadi array
        $film_pic_path = $base_url.$film_pic['name']; // Path Film

        if(in_array(end($film_ext),$allow_type)){
            echo"Allowed";
            //Proses Pindah File
            $uploaddir = '../../../images/';
            $uploadfile = $uploaddir . basename($film_pic['name']);
    
            if (move_uploaded_file($film_pic['tmp_name'], $uploadfile)) {
                echo "File is valid, and was successfully uploaded.\n";
            } 
            else {
                echo "Upload failed";
                die();
            }            
            //Query Insert
            $sql = "INSERT INTO film (nama_film,desc_film,url_foto,sutradara,aktor,tgl_rilis,link_trailer,category)
                    VALUES ('$judul','$desc','$film_pic_path','','','$tgl_rilis','$link','$cat')";
            
            //Proses Insert
            if (mysqli_query($conn, $sql)) {
                return header('Location: ' . $_SERVER['HTTP_REFERER']);
            } 
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                die();
            }
        }
        else {
            echo "Not Allowed";
            die();
        }
    }



?>