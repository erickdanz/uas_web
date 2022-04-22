<?php 
    include('users/conn/connection.php');
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];

    $sql = "SELECT DISTINCT date FROM jadwalpenayangan jp 
            JOIN studio s ON s.id = jp.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE jp.id_film = $film_id and jp.id_studio = $studio_id";
    $arr_tanggal = mysqli_query($conn, $sql);


    $text = '<label for="" class="form-label">Pilih Tanggal</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($arr_tanggal)){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" onchange="getTime(this)" class="btn-check" name="date" id="tgl'.$i.'" value="'.$row['date'].'" autocomplete="off">
                <label class="btn btn-outline-primary" for="tgl'.$i.'">'.$row['date'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>