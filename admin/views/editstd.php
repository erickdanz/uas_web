<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    //Fetch Location Data    
    $sql = "SELECT * FROM lokasi";
    $lokasi_result = mysqli_query($conn, $sql);
?>
    <div class="content-wrapper">
        <div class="row">
            <button class="btn btn-primary">
                
            </button>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Edit Studio</h3>
                </div>
                <form method="POST" action="studio/delstudio.php">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="lokasi">Pilih Lokasi</code></label>
                            <select class="custom-select form-control-border" id="lokasi" name="lokasi" required>
                                <option value="-">---Pilih Lokasi---</option>
                                <?php 
                                if (mysqli_num_rows($lokasi_result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($lokasi_result)) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_lokasi'].' ['.$row['wilayah'].']';?></option>                                    
                                    <?php                                   
                                    }
                                } 
                                else {
                                    ?>
                                        <option value="-">Tidak ada Data</option>
                                    <?php
                                }
                                ?>                        
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="stud_no">Studio Nomor</label>
                            <select class="custom-select form-control-border" name="stud_no" id="stud_no" required>
                                <option value="-">---Pilih Nomor Studio---</option>
                                <?php 
                                    for($i = 1; $i <= 10; $i++){
                                ?>
                                <option value="<?php echo $i; ?>">Studio : <?php echo $i; ?></option>
                                    <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Jumlah Baris</label>
                                    <input type="text" class="form-control" placeholder="Masukkan jumlah baris" maxlength="2" name="jlh_baris" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Jumlah Kolom</label>
                                    <input type="text" class="form-control" placeholder="Masukkan jumlah kolom" maxlength="2" name="jlh_kolom" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
            </div>
        </div>
    </div>
<?php 
    include('layouts/footer.php');
?>