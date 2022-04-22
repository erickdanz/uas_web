<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    //Fetch Location Data    
    $sql = "SELECT s.id, nama_lokasi, studio_no, pattern_kursi FROM studio s JOIN lokasi l ON l.id = s.id_lokasi";
    $studio = mysqli_query($conn, $sql);
?>
    <div class="content-wrapper">
        <div class="row">
            <?php 
                if(mysqli_num_rows($studio) > 0){
                    while($row = mysqli_fetch_assoc($studio)){
            ?>
                <div class="col-lg-3">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Studio Information</h3>
                        </div>
                        <form action="studio/delstudio.php" method="POST">
                            <div class="card-body">
                                <input type="text" class="form-control" name="id" value="<?php echo $row['id'];?>" hidden>
                                <div class="form-group">
                                    <label for="lokasi">Lokasi : </label>
                                    <input type="text" class="form-control" id="lokasi" value="<?php echo $row['nama_lokasi'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="studio_no">Studio No : </label>
                                    <input type="text" class="form-control" id="studio_no" value="<?php echo $row['studio_no'];?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="studio_no">Jumlah Kursi : </label>
                                    <?php 
                                        $arr_kursi = explode(';',$row['pattern_kursi']);
                                        $jlh = (int) $arr_kursi[0] * (int) $arr_kursi[1];
                                    ?>
                                    <input type="text" class="form-control" id="studio_no" value="<?php echo $jlh ;?>" readonly>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-danger">Delete This Studio</button>
                            </div>
                        </form>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
<?php 
    include('layouts/footer.php');
?>