<?php 
    include('header.php');
    include('users/conn/connection.php');
    $film_id = 1;
    $sql = "SELECT * FROM film WHERE id = $film_id";
    $film = mysqli_query($conn, $sql);
    if(mysqli_num_rows($film) > 0){
        $film = mysqli_fetch_assoc($film);
    }
?>
    <div class="container film_box_main" style="border: 2px solid darkgrey; margin-top: 50px;">
        <div class="film">
            <figure class="figure">
                <img src="morbius.JPG" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-center"><b>Morbius</b></figcaption>
            </figure>
        </div>
        <div class="film_info">
            <h1 style="margin-left: 0px; margin-top: 20px;"><b><?php echo $film['nama_film'];?></b></h1>
            <br>
            <div class="info_box">
                <p class="label_info">Jenis Film &nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value">Action, Adventure, Drama</p>                
            </div>
            <div class="info_box">
                <p class="label_info">Produser &nbsp;&nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value">Avi Arad, Lucas Foster, Matt Tolmach</p>                 
            </div>
            <div class="info_box">
                <p class="label_info">Sutradara &nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value"><?php echo $film['sutradara'];?></p>                 
            </div>
            <div class="info_box">
                <p class="label_info">Penulis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value">Matt Sazama, Burk Sharpless, Art Marcum, Matt Holloway</p>                 
            </div>
            <div class="info_box">
                <p class="label_info">Produksi &nbsp;&nbsp;&nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value">Columbia Pictures</p>                 
            </div>
            <div class="info_box">
                <p class="label_info">Casts &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                <span class="sep"><p>:</p></span>
                <p class="info_value">Jared Leto, Matt Smith, Adria Arjona, Jared Harris, Al Madrigal, Tyrese Gibson</p>                
            </div>
            <div class="info_box">
                <h1 class="label_info" style="font-size : 20pt;";>SINOPSIS</h1>
                <br>
                <p class="info_value" style="width:100%;";>Ahli biokimia Michael Morbius (Jared Leto) mencoba menyembuhkan dirinya sendiri dari penyakit darah langka, namun secara tidak sengaja ia menginfeksi tubuhnya dan berubah jadi mahluk yang menyerupai vampir.</p>                
            </div>
            <div class="info-box btn_trailer_box">
                <button class="btn btn-primary trailer_btn" data-bs-toggle="modal" data-bs-target="#trailer_modal" style="background-color:#3A3845;">Trailer</button> 
                <?php
                    if(isset($_SESSION['logged_in'])){
                ?>
                    <a href="seats.php?studio_id=2&film_id=<?php echo $film["id"];?>" class="btn btn-primary btn_buy">Beli Tiket</a> 
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="modal fade" id="trailer_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content vid_player">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Trailer Mobius</h5>
                <button type="button" class="close" id="mod_close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <iframe width="885" height="498" src="https://www.youtube.com/embed/SQK-QxxtE8Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div> -->
            </div>
          </div>
        </div>
    </div>

<?php 
    include('footer.php');
?>