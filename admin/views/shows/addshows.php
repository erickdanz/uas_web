<?php 
    include ('../conn/connection.php');

    if(isset($_POST)){
        $id_film = $_POST['film'];
        $id_studio = $_POST['studio_no'];
        $arr_jam_tayang = $_POST['jam_tayang'];
        $price = $_POST['price'];
        $tgl_shows = $_POST['shows_date'];
        //Query Get jumlah kursi
        $query_get_jlh_kursi = "SELECT * FROM studio where id = $id_studio";
        $result = mysqli_query($conn,$query_get_jlh_kursi);

        $studio = mysqli_fetch_assoc($result);
        $pattern_kursi = $studio['pattern_kursi'];
        $arr_pattern = explode(';',$pattern_kursi);

        $jlh_kursi = (int)$arr_pattern[0] * (int)$arr_pattern[1];
        $str_jam = "";
        foreach ($arr_jam_tayang as $jam_tayang){
            $str_jam .= "'$jam_tayang',";
        }
        $str_jam = substr($str_jam,0,strlen($str_jam)-1);
        $sql_select = "SELECT * FROM jadwalpenayangan WHERE id_studio = $id_studio and date = '$tgl_shows' and id_film = $id_film and jam_tayang IN ($str_jam)";
        $result_select = mysqli_query($conn,$sql_select);
        if(mysqli_num_rows($result_select) > 0){
            $_SESSION['error'] = "Jadwal telah ada";
            return header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        $arr_query = array();
        for ($i = 0; $i < count($arr_jam_tayang); $i++){
            $query = "($id_studio,$id_film,'$arr_jam_tayang[$i]',0,$jlh_kursi,$price,'','$tgl_shows')";
            array_push($arr_query,$query);
        }
        $query_concat = implode(',',$arr_query);
        
        $sql = "INSERT INTO jadwalpenayangan (id_studio,id_film,jam_tayang,tiket_terbeli,tiket_tersedia,harga_tiket,kursi_terbeli,date)
                VALUES $query_concat";
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