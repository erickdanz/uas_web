<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    if(isset($_POST['film']) != ""){
        $id_film = $_POST['film'];

        $sql = "SELECT * from film WHERE id = $id_film";
        $result = mysqli_query($conn,$sql);   
    }
    else {
        $result = null;
    }
?>
    <div class="content-wrapper">
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    <i class="fas fa-text-width"></i>
                    Film Description
                    </h3>
                </div>
                <div class="card-body">
                    <?php 
                        if($result != null){
                            if(mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_assoc($result);
                    ?>
                                <dl class="row">
                                    <dt class="col-sm-4">Judul</dt>
                                    <dd class="col-sm-8"><strong><?php echo $row['nama_film']; ?></strong></dd>
                                    <dt class="col-sm-4">Deskripsi Film</dt>
                                    <dd class="col-sm-8"><?php echo $row['desc_film'];?></dd>
                                    <dt class="col-sm-4">Foto film</dt>
                                    <dd class="col-sm-8"><img src="<?php echo $row['url_foto'];?>" width="200"></dd>
                                    <dt class="col-sm-4">Sutradara</dt>
                                    <dd class="col-sm-8"><?php echo $row['sutradara'];?></dd>
                                    <dt class="col-sm-4">Aktor</dt>
                                    <?php $arr_aktor = explode(';',$row['aktor']);?>
                                    <dd class="col-sm-8">
                                        <ul>
                                        <?php 
                                            foreach($arr_aktor as $aktor){
                                                ?>
                                                    <li><?php echo $aktor; ?></li>       
                                                <?php
                                            }
                                        ?>
                                        </ul>
                                    </dd>
                                    <dt class="col-sm-4">Tanggal Rilis</dt>
                                    <dd class="col-sm-8"><?php echo $row['tgl_rilis'];?></dd>
                                </dl>
                            <?php
                            }
                        }
                        else {
                            ?>
                                <p>Id Film tidak diketahui</p>
                            <?php
                        }
                    ?>
                </div>
                <form class="form" action="film/delfilm.php" method="POST">
                    <input type="text" name="id_film" value="<?php echo $row['id'];?>" hidden>
                    <div class="card-footer text-center">
                        <a href="editfilm.php?film_id=<?php echo $row['id'];?>" class="btn btn-warning btn-lg">Edit This Film</a>
                        <button type="submit" class="btn btn-danger btn-lg">Delete This Film</button>
                    </div>
                </form>
        </div>
    </div>
<?php 
    include('layouts/footer.php');
?>