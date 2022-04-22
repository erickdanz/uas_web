<?php 
    include('../conn/connection.php');
    if(isset($_POST)) {
        $base_url="http://".$_SERVER['SERVER_NAME'].'/MITIX/images/';

        $allow_type = array("jpg","jpeg","png","svg");

        $film_id = $_POST['id_film'];
        $sql = "SELECT * FROM film WHERE id = $film_id";
        $res = mysqli_query($conn,$sql);
        $res = mysqli_fetch_assoc($res);
        $judul = $_POST['judul'];
        $trailer = ($_POST['n_trailer'] == "") ? $res['link_trailer'] : $_POST['n_trailer'];
        $cat = $_POST['category'];
        $tgl = $_POST['rilis'];
        $desc = $_POST['desc'];
        if($_FILES['film_pic']['name'] != ""){
            $film_pic = $_FILES['film_pic'];
        
            $film_ext = explode('/',$film_pic['type']); //Type dari si film, kita ubah menjadi array
            $film_pic_path = $base_url.$film_pic['name']; // Path Film
    
            if(in_array(end($film_ext),$allow_type)){
                echo"Allowed";
                //Proses Pindah File
                $uploaddir = '../../../images/';
                $uploadfile = $uploaddir . basename($film_pic['name']);
                $url = $film_pic_path;
                if (move_uploaded_file($film_pic['tmp_name'], $uploadfile)) {
                    echo "File is valid, and was successfully uploaded.\n";
                } 
                else {
                    echo "Upload failed";
                    die();
                }            
            }
            else {
                echo "Not Allowed";
                die();
            }
        }
        else {
            $url = $res['url_foto'];
        }
        //Query Update
        $sql = "UPDATE film
        SET nama_film = '$judul', desc_film = '$desc', url_foto = '$url', link_trailer = '$trailer', category = '$cat', tgl_rilis = '$tgl'
        WHERE id = $film_id";
        
        //Proses Insert
        if (mysqli_query($conn, $sql)) {
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            die();
        }
    }


?>