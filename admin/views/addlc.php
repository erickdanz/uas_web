<?php 
    include('conn/connection.php');
    include('layouts/header.php');

    //Fetch Location Data    
    $sql = "SELECT * FROM lokasi";
    $lokasi_result = mysqli_query($conn, $sql);
?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add Location</h3>
                    </div>
                    <form method="POST" action="location/addlocation.php">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="wilayah">Wilayah</label>
                                <input type="text" id="wilayah" class="form-control" name="wilayah" placeholder="Masukkan wilayah / daerah">
                            </div>
                            <div class="form-group">
                                <label for="nama_lokasi">Nama Lokasi</label>
                                <input type="text" id="nama_lokasi" class="form-control" name="nama_lokasi" placeholder="Masukkan wilayah / daerah">
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