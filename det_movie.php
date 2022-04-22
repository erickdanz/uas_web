<?php 
    include('header.php');
    include('users/conn/connection.php');
    $film_id = $_GET['id'];
    $sql = "SELECT * FROM film WHERE id = $film_id";
    $film = mysqli_query($conn, $sql);
    if(mysqli_num_rows($film) > 0){
        $film = mysqli_fetch_assoc($film);
    }
?>
<style>
    iframe {
        width : 900px!important;
    }
    .info_value {
      max-width : 75%!important;
      text-align : justify;
    }
    .label_info, .sep , .info_value {
      display : inline-block;
    }
</style>
    <div class="container film_box_main" style="border: 2px solid darkgrey; margin-top: 50px;">
        <div class="film">
            <figure class="figure">
                <img src="<?php echo $film['url_foto']; ?>" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-center"><b><?php echo $film['nama_film'];?></b></figcaption>
            </figure>
        </div>
        <div class="film_info">
            <?php echo $film['desc_film'];?>
            <div class="info-box btn_trailer_box">
                <button class="btn btn-primary trailer_btn" data-bs-toggle="modal" data-bs-target="#trailer_modal" style="background-color:#3A3845;">Trailer</button> 
                <?php
                    if(isset($_SESSION['logged_in'])){
                ?>
                    <a href="choose_sched.php?id=<?php echo $film['id'];?>" class="btn btn-primary btn_buy">Beli Tiket</a> 
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
                <?php echo $film['link_trailer'];?>
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