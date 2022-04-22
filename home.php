<?php 
 include('header.php');
 include('users/conn/connection.php');
 $sql = "SELECT * FROM film WHERE category = 'now_showing'";
 $sql2 = "SELECT * FROM film WHERE category = 'coming_soon'";
 $result_now = mysqli_query($conn,$sql);
 $result_soon = mysqli_query($conn,$sql2);
?>
    <div class="container col-8 col-sm-8", style="padding-top: 50px; height: 600px;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a>
                    <img src="mrbb.jpg" class="d-block" alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a>
                    <img src="lcc.jpg" class="d-block " alt="...">
                    </a>
                </div>
                <div class="carousel-item">
                    <a>
                    <img src="mmm.png" class="d-block " alt="...">
                    </a>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container" id="now_playing">
        <div class="film_slider">
            <h1 style="margin-bottom: 30px;">Now Playing</h1>
            <?php 
                $i = 1;
                if(mysqli_num_rows($result_now) > 0){
                    while($row = mysqli_fetch_assoc($result_now)){
                        if($i <= 5){
                        ?>
                            <div class="film<?php echo $i;?>">
                                <a href="det_movie.php?id=<?php echo $row['id'];?>">
                                <figure class="figure">
                                    <img src="<?php echo $row['url_foto']; ?>" class="figure-img img-fluid rounded" alt="<?php echo $row['nama_film'];?>">
                                    <figcaption class="figure-caption text-center"><b><?php echo $row['nama_film']; ?></b></figcaption>
                                </figure>
                                </a>
                            </div>
                        <?php
                        }
                    }
                }
            
            ?>
            <!-- <div class="film3">
                <a href="umma.php">
                <figure class="figure">
                    <img src="umma.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Umma</b></figcaption>
                </figure>
                </a>
            </div>
            <div class="film4">
                <a href="uncharted.php">
                <figure class="figure">
                    <img src="uncharted.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Uncharted</b></figcaption>
                </figure>
                </a>
            </div> -->
        </div>
    </div>

    <div class="container" id="coming_soon">
        <div class="film_slider">
            <h1 style="margin-bottom: 30px;">Coming Soon</h1>
            <?php 
                $i = 1;
                if(mysqli_num_rows($result_soon) > 0){
                    while($row = mysqli_fetch_assoc($result_soon)){
                        if($i <= 5){
                        ?>
                            <div class="film<?php echo $i;?>">
                                <a href="det_movie.php?id=<?php echo $row['id'];?>">
                                <figure class="figure">
                                    <img src="<?php echo $row['url_foto']; ?>" class="figure-img img-fluid rounded" alt="<?php echo $row['nama_film'];?>">
                                    <figcaption class="figure-caption text-center"><b><?php echo $row['nama_film']; ?></b></figcaption>
                                </figure>
                                </a>
                            </div>
                        <?php
                        }
                    }
                }
            
            ?>
            <!-- <div class="film1">
                <a href="contractor.php">
                <figure class="figure">
                    <img src="contractor.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Contractor</b></figcaption>
                </figure>
                </a>
            </div>
            <div class="film2">
                <a href="fantastic.php">
                <figure class="figure">
                    <img src="fantastic.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Fantastic Beasts</b></figcaption>
                </figure>
                </a>
            </div>
            <div class="film3">
                <a href="KKN.php">
                <figure class="figure">
                    <img src="KKN.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>KKN di desa penari</b></figcaption>
                </figure>
                </a>
            </div>
            <div class="film4">
                <a href="sonic.php">
                <figure class="figure">
                    <img src="sonic.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Sonic the hedgehog</b></figcaption>
                </figure>
                </a>
            </div>
            <div class="film5">
                <a href="warisan.php">
                <figure class="figure">
                    <img src="warisan.JPG" class="figure-img img-fluid rounded" alt="...">
                    <figcaption class="figure-caption text-center"><b>Gara-gara Warisan</b></figcaption>
                </figure>
                </a>
            </div> -->
        </div>
    </div>
<?php include('footer.php')?>