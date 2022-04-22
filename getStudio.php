<?php 
    include('users/conn/connection.php');
    $id = $_GET['id'];
    $film_id = $_GET['film_id'];
    $sql = "SELECT DISTINCT s.studio_no, s.id FROM jadwalpenayangan jp 
            JOIN studio s ON s.id = jp.id_studio
            JOIN lokasi l ON l.id = s.id_lokasi
            WHERE l.id = $id and jp.id_film = $film_id";
    $studio = mysqli_query($conn, $sql);
    $text = '<label for="exampleInputPassword1" class="form-label">Pilih Studio</label><br>';
    $i = 1;
    while($row = mysqli_fetch_assoc($studio)){
        $text .= '
            <div class="form-check form-check-inline">
                <input type="radio" class="btn-check" onclick="getDate(this)" name="studio_id" id="inlineRadio'.$i.'" autocomplete="off" value="'.$row['id'].'">
                <label class="btn btn-outline-primary" for="inlineRadio'.$i.'">Studio : '.$row['studio_no'].'</label>
            </div>
        ';
        $i++;
    }
    echo $text;

?>