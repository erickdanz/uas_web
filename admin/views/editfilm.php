<?php 
    include('layouts/header.php');
    include('conn/connection.php');
    $film_id = $_GET['film_id'];
    $query = "SELECT * FROM film WHERE id = $film_id";
    $result = mysqli_query($conn,$query);
    $result = mysqli_fetch_assoc($result);
?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Film</h3>
                    </div>
                    <form method="POST" action="film/editfilm.php" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group d-none">
                                <label for="judul">ID Film</label>
                                <input type="text" class="form-control" id="id_film" name="id_film" value="<?= $result['id']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $result['nama_film']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Trailer Saat Ini</label>
                                <p><?php echo $result['link_trailer']; ?></p>
                                <label for="n_trailer">Trailer Baru</label>
                                <input type="text" class="form-control" id="n_trailer" name="n_trailer" placeholder="Please Re-Insert New Trailer Link">
                                <small class="text-danger">Wajib Tag Iframe ! Jika menggunakan video lama, harap kosongkan field ini</small>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-12">Kategori Film</label>
                                <div class="custom-control custom-radio col-lg-3 col-md-6 col-sm-6 mb-3 ml-2">
                                    <input class="custom-control-input" type="radio" id="customRadio1" name="category" value="now_showing" <?php if($result['category'] == "now_showing"){ ?> checked="" <?php } ?>>
                                    <label for="customRadio1" class="custom-control-label">Now Showing</label>
                                </div>
                                <div class="custom-control custom-radio col-lg-3 col-md-6 col-sm-6 mb-3 ml-2">
                                    <input class="custom-control-input" type="radio" id="customRadio2" name="category" value="coming_soon" <?php if($result['category'] == "coming_soon"){ ?> checked="" <?php } ?>>
                                    <label for="customRadio2" class="custom-control-label">Coming Soon</label>
                                </div>

                            </div>
                            <!-- <div class="form-group">
                                <label for="sutradara">Sutradara</label>
                                <input type="text" class="form-control" id="sutradara" name="sutradara" placeholder="Masukkan Judul" required>
                            </div>
                            <div class="form-group">
                                <label for="aktor">Aktor</label>
                                <input type="text" class="form-control" id="aktor" name="aktor" placeholder="Masukkan Aktor" required>
                            </div> -->
                            <div class="form-group">
                                <label for="rilis">Tanggal Rilis</label>
                                <input type="date" class="form-control" id="rilis" name="rilis" value="<?php echo $result['tgl_rilis'];?>" required>
                            </div>
                            <div class="form-group">
                                <label for="sutradara">Deskripsi</label>
                                <textarea id="summernote" name="desc">
                                    <strong><?php echo $result['desc_film']; ?></strong>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Gambar film saat ini</label><br>
                                <img class="img-fluid" src="<?php echo $result['url_foto'];?>" alt="">
                            </div>
                            <div class="form-group">
                                <label for="film_pic">Gambar Film Baru</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="film_pic" name="film_pic">
                                        <label class="custom-file-label" for="film_pic">Choose Film Photo</label>
                                    </div>
                                </div>
                                <small class="text-danger">Masukkan gambar baru</small>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<script>
    $(function () {
        $('#summernote').summernote()
    });
</script>
<?php 
    include('layouts/footer.php');
?>