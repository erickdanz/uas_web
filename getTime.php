<?php 
    include('users/conn/connection.php');
    $film_id = $_GET['film_id'];
    $studio_id = $_GET['studio_id'];
    $date = $_GET['tgl'];
    $sql = "SELECT DISTINCT jam_tayang FROM jadwalpenayangan jp 
            JOIN studio s ON s.id = jp.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE jp.id_film = $film_id and jp.id_studio = $studio_id and jp.date = $date";
    $arr_jam_tayang = mysqli_query($conn, $sql);
    $text = '<label for="" class="form-label">Pilih Jam Tayang</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($arr_jam_tayang)){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" class="btn-check" name="jam_tayang" id="jt'.$i.'" value="'.$row['jam_tayang'].'">
                <label class="btn btn-outline-primary" for="jt'.$i.'">'.$row['jam_tayang'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>