<?php 
    include('users/conn/connection.php');
    // if(isset($_GET['studio_id'])) {
    //     $stud_id = $_GET['studio_id'];
    // }
    // else {
    //     $stud_id = 1;
    // }
    // $stud_id = isset($_GET['studio_id']) ? $_GET['studio_id'] : 1;

    $stud_id = $_GET['studio_id'];
    $film_id = isset($_GET['film_id']) ? $_GET['film_id'] : 1;
    $jam_tayang = $_GET['jam_tayang'];
    $date = $_GET['date'];

    $sql = "SELECT * FROM studio WHERE id = $stud_id";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM film WHERE id = $film_id";
    $film = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM jadwalpenayangan WHERE id_film = $film_id and id_studio = $stud_id and jam_tayang = '$jam_tayang' and date = '$date'";
    $shows = mysqli_query($conn,$sql);
    $shows = mysqli_fetch_assoc($shows);
    if(mysqli_num_rows($film) > 0){
        $film = mysqli_fetch_assoc($film);
    }
    
    // $arr_hrf = ['A','B','C'];
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($result);
        $detail = $row['pattern_kursi'];
        //10;15 -> [10,15]
        $arr_detail = explode(';',$detail); // -> Split (Memisahkan karakter berdasarkan delimeter tertentu)
        $baris = $arr_detail[0];
        $kolom = $arr_detail[1];
        $arr_kursi = array(); //->Nampung kursi yang digenerate
        $arr_kursi_terbeli = array(); //-> Kursi yang uda dibeli
        if($shows['kursi_terbeli'] != ''){
          foreach(explode(';',$shows['kursi_terbeli']) as $show){
            array_push($arr_kursi_terbeli,$show);
          }
        }
        for ($i = 0; $i < $baris; $i++){
            $char_bar = chr(65+$i);
            $temp = array();
            for ($j = 1; $j <= $kolom; $j++){
                $id_kursi = $char_bar.$j;
                array_push($temp,$id_kursi);
            }
            array_push($arr_kursi,$temp);
        }
    } 
    else {
        ?>
        <script>alert("Error. Please contact IT Staff")</script>
        <?php
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="users/assets/css/style.css" />
    <title>Movie Seat Booking</title>
    <script>

    </script>
  </head>
  <body>
    <h1>FILM : <?php echo $film["nama_film"];?></h1>
    <h3>Harga per tiket : Rp. <?php echo number_format($shows['harga_tiket'],2,'.',','); ?></h3>
    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>N/A</small>
      </li>
      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>
      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container" style="text-align:center;">
      <span >Screen</span>
      <div class="screen"></div>
        <?php 
            for($i = 0; $i < count($arr_kursi); $i++){
        ?>
            <div class="row">
                <?php 
                    for($j = 0; $j < count($arr_kursi[$i]); $j++){
                        $id_kursi = $arr_kursi[$i][$j];
                        if(in_array($id_kursi,$arr_kursi_terbeli)){
                            $status = "sold";
                        }
                        else {
                            $status = "avail";
                        }
                        ?>
                            <div class="seat <?php if($status == "sold") echo 'occupied'; ?>"><?php echo $id_kursi;?></div>
                        <?php
                    }
                ?>
            </div>
        <?php
            }
        ?>
    </div>

    <p class="text" style="margin : 25px 0;">
      You have selected <span id="count">0</span> seats</span>
    </p>
    <form method="post" id="form_checkout" action="payment_page.php">
      <div class="row">
        <input type="text" style="display:none;" id="chair_list" name="chair_list">
        <input type="text" style="display:none;" id="studio_id" name="studio_id" value="<?php echo $stud_id;?>">
        <input type="text" style="display:none;" id="film_id" name="film_id" value="<?php echo $film_id;?>">
        <input type="text" style="display:none;" id="jam_tayang" name="jam_tayang" value="<?php echo $jam_tayang;?>">
        <input type="text" style="display:none;" id="date" name="date" value="<?php echo $date;?>">
      </div>
      <div class="row" style="min-width : 450px;min-height : 40px;">
        <button class="btn btn-primary" style="width : 100%;background-color : #35b27d; color:#fff;text-transform:uppercase;font-weight : 600;border-radius:25px;box-shadow : 2px 2px 5px #555;cursor:pointer;">Checkout</button>
      </div>
    </form>
    <script src="users/assets/js/script.js"></script>
  </body>
</html>