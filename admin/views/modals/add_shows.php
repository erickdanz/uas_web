<?php 
    include ('conn/connection.php');
    $sql_film = "SELECT * FROM film";
    $sql_studio = "SELECT s.id, nama_lokasi, studio_no FROM studio s JOIN lokasi l ON l.id = s.id_lokasi";

    $result_film = mysqli_query($conn,$sql_film);
    $result_studio = mysqli_query($conn,$sql_studio);

    function indonesianDate($date) {
        $ar_day_format = date('D'); // The Current Day        
        $find = array ("Sat", "Sun", "Mon", "Tue", "Wed" , "Thu", "Fri");
        $replace = array ("Sabtu", "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat");
        $ar_day = str_replace($find, $replace, $ar_day_format);

        return $ar_day;
    }
?>
<div class="modal fade" id="add_shows" tabindex="-1" aria-labelledby="add_showsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="add_showsLabel">Penambahan Jadwal Tayang</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="shows/addshows.php" method="POST">
                <div class="form-group">
                    <label for="shows_date">Tanggal Tayang</label>
                    <input type="date" class="form-control" id="shows_date" name="shows_date" value="<?php echo date('Y-m-d');?>">                   
                </div>
                <div class="form-group">
                    <label for="film">Pilih Film : </label>
                    <select class="custom-select rounded-0" id="film" name="film" required>
                        <?php 
                            if(mysqli_num_rows($result_film) > 0){
                                while($row = mysqli_fetch_assoc($result_film)){
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_film'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="studio">Pilih Studio : </label>
                    <select class="custom-select rounded-0" id="studio" name="studio_no" required>
                        <?php 
                            if(mysqli_num_rows($result_studio) > 0){
                                while($row = mysqli_fetch_assoc($result_studio)){
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_lokasi'].' - Studio : '.$row['studio_no'];?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jam_tayang">Pilih Jam Tayang : </label>
                    <div class="form-row">
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time1" value="12:15" name="jam_tayang[]" checked>
                            <label for="time1" class="custom-control-label">12 : 15</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time2" value="13:50" name="jam_tayang[]">
                            <label for="time2" class="custom-control-label">13 : 50</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time3" value="15:05" name="jam_tayang[]">
                            <label for="time3" class="custom-control-label">15 : 05</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time4" value="16:35" name="jam_tayang[]">
                        <label for="time4" class="custom-control-label">16 : 35</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time5" value="17:40" name="jam_tayang[]">
                        <label for="time5" class="custom-control-label">17 : 40</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="time6" value="19:30" name="jam_tayang[]">
                        <label for="time6" class="custom-control-label">19 : 30</label>
                        </div>
                    </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time7" value="20:50" name="jam_tayang[]">
                            <label for="time7" class="custom-control-label">20 : 50</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time8" value="22:20" name="jam_tayang[]">
                            <label for="time8" class="custom-control-label">22 : 20</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" id="time9" value="00:10" name="jam_tayang[]">
                            <label for="time9" class="custom-control-label">00 : 10</label>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="form-group">
                    <label>Harga Tiket : </label>
                    <div class="custom-control custom-radio">
                        <div class="form-row">
                            <div class="col">
                                <input class="custom-control-input" type="radio" id="price" name="price" value="35000">
                                <label for="price" class="custom-control-label">Rp. 35,000</label>
                            </div>
                            <div class="col">
                                <input class="custom-control-input" type="radio" id="price2" name="price" value="50000">
                                <label for="price2" class="custom-control-label">Rp. 50,000</label>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="alert alert-primary">
                    Jumlah Tiket akan digenerate otomatis oleh sistem berdasarkan jumlah kursi yang terdapat di studio.
                </div>
                <button type="submit" class="btn btn-success btn-block">Submit</button>
            </form>
        </div>
      </div>
    </div>
</div>
