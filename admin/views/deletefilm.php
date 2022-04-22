<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    $sql = "SELECT * from film";
    $result = mysqli_query($conn,$sql);
?>
    <div class="content-wrapper">
    <div class="row">
            <div class="col-lg-12">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Delete Film</h3>
                    </div>
                    <form method="POST" action="deletefilmdetails.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="film">Pilih Film</code></label>
                                <select class="custom-select form-control-border" id="film" name="film" required>
                                    <option value="-">---Pilih Film---</option>
                                    <?php 
                                    if (mysqli_num_rows($result) > 0) {
                                        // output data of each row
                                        while($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['nama_film'];?></option>                                    
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
                        </div>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-warning">Show Details Film</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php 
    include('layouts/footer.php');
?>