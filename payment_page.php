<?php 
    include('header.php');
    include('users/conn/connection.php');
    $base_url=$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?').'/'; 
    $arr_url = explode('/',$base_url);
    $base_url_config = "http://".implode('/',[$arr_url[0],$arr_url[1]]);
    $base_file = implode('/',[$arr_url[0],$arr_url[1]]);
    if(isset($_POST)){
        $stud_id = $_POST['studio_id'];
        $film_id = $_POST['film_id'];
        $jam_tayang = $_POST['jam_tayang'];
        $date = $_POST['date'];
        $booked = $_POST['chair_list'];
        $arr_book = str_replace(',',';',$booked).';'; #E7;E8 [E7,E8]
        $arr_kursi_pesan = explode(',',$booked);
        $count_jlh = count($arr_kursi_pesan);
        $sql_get = "SELECT * FROM jadwalpenayangan WHERE id_studio = $stud_id and id_film = $film_id and jam_tayang = '$jam_tayang' and date = '$date'";
        $result_get = mysqli_query($conn,$sql_get);
        $result_get = mysqli_fetch_assoc($result_get);
        
        $id_shows = $result_get['id'];
        $sql_get_info_shows = "SELECT * FROM jadwalpenayangan jp 
                                JOIN studio s ON s.id = jp.id_studio
                                JOIN lokasi l ON l.id = s.id_lokasi
                                WHERE jp.id = $id_shows";
        $result_info_shows = mysqli_query($conn,$sql_get_info_shows);
        $result_info_shows = mysqli_fetch_assoc($result_info_shows);

        $sql_get_film = "SELECT * FROM film WHERE id = $film_id";
        $result_film = mysqli_query($conn,$sql_get_film);
        $result_film = mysqli_fetch_assoc($result_film);

        $flag = 0;
        foreach($arr_kursi_pesan as $kursi){
            if(strpos($result_get['kursi_terbeli'],$kursi) != ''){
                $flag = 1;
                break;
            }
        }
        if($flag == 0){
            if($result_get['kursi_terbeli'] != ''){
                $arr_book .= $result_get['kursi_terbeli'];
            }
            $sold = $result_get['tiket_terbeli'] + $count_jlh;
            $left = $result_get['tiket_tersedia'] - $count_jlh; 
            $id = $result_get['id'];
            $sql = "UPDATE jadwalpenayangan
                    SET kursi_terbeli = '$arr_book', tiket_terbeli = $sold, tiket_tersedia = $left
                    WHERE id = $id";
            $result = mysqli_query($conn,$sql);
            if(!$result){
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                die();
            }
        }
    }
?>
<div class="container">
  <div id="Checkout" class="inline">
      <h1>Formulir Pembayaran</h1>
      <div class="card-row">
          <h3>Detail Pembelian</h3>
          <div class="row fw-bold text-uppercase align-items-center">
              <div class="col-lg-4">
                <img src="<?php echo $result_film['url_foto'];?>" alt="" class="img-fluid">
              </div>
              <div class="col-lg-8 text-start">
                <h3><?php echo $result_film['nama_film']; ?></h3>
                <div class="row">
                    <p class="col-6">Lokasi </p>
                    <p class="col-6">: <?php echo $result_info_shows['nama_lokasi'];?></p>
                </div>
                <div class="row">
                    <p class="col-6">Daerah </p>
                    <p class="col-6">: <?php echo $result_info_shows['wilayah'];?></p>
                </div>
                <div class="row">
                    <p class="col-6">Studio</p>
                    <p class="col-6">: <?php echo $result_info_shows['studio_no'];?></p>
                </div>
                <div class="row">
                    <p class="col-6">Jam Tayang</p>
                    <p class="col-6">: <?php echo $result_info_shows['jam_tayang'];?></p>
                </div>
                <div class="row">
                    <p class="col-6">Kursi yang dipesan </p>
                    <p class="col-6">: <?php echo $booked;?></p>
                </div>
                <div class="row">
                    <p class="col-6">Harga per Tiket </p>
                    <p class="col-6">: Rp. <?php echo number_format($result_get['harga_tiket'],2,'.',',');?></p>
                </div>
              </div>
          </div>
      </div>
      <form action="checkout.php" method="POST">
          <div class="form-group">
              <label for="PaymentAmount">Payment amount</label>
              <div class="amount-placeholder">
                  <span>Rp. </span>
                  <span><?php echo number_format($count_jlh * $result_get['harga_tiket'],2,'.',',');?></span>
              </div>
          </div>

          <div class="form-group mb-3">
              <label class="mb-1" >Pembeli atas nama</label>
              <input class="form-control text-uppercase" type="text" name="username" value="<?php echo $_SESSION['username']; ?>" readonly></input>
              <input class="form-control text-uppercase" type="text" name="shows_id" value="<?php echo $result_get['id']; ?>" readonly style="display:none;"></input>
              <input class="form-control text-uppercase" type="text" name="tickets" value="<?php echo $booked; ?>" readonly style="display:none;"></input>
          </div>
          <div class="form-group mb-3">
                <label for="CreditCardNumber" class="mb-1"> Pembayaran menggunakan : </label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input fci" type="radio" id="radio1" name="p_method" value="Dana" checked>
                    <label class="form-check-label" for="radio1"><img src="users/assets/images/dana.jpg" width="100" alt="Dana"></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input fci" type="radio" id="radio2" name="p_method" value="Ovo">
                    <label class="form-check-label" for="radio2"><img src="users/assets/images/ovo.png" width="100" alt="Ovo"></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input fci" type="radio" id="radio3" name="p_method" value="Gopay">
                    <label class="form-check-label" for="radio3"><img src="users/assets/images/gopay.jpeg" width="100" alt="Gopay"></label>
                </div>
          </div>
          <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" style="width:100%;">
              <span class="align-middle">Bayar Rp. <?php echo number_format($count_jlh * $result_get['harga_tiket'],2,'.',',');?> </span>
          </button>
      </form>
  </div>
</div>
<?php 
    include('footer.php');
?>