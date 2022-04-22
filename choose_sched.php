<?php 
    include('header.php');
    include('users/conn/connection.php');
    $film_id = $_GET['id'];
    $sql_location = "SELECT DISTINCT l.id, l.nama_lokasi, l.wilayah FROM jadwalpenayangan jp 
                    JOIN studio s ON s.id = jp.id_studio
                    JOIN lokasi l ON l.id = s.id_lokasi
                    WHERE jp.id_film = $film_id";
    $location = mysqli_query($conn, $sql_location);
    $sql_film = "SELECT * FROM film WHERE id = $film_id";
    $film = mysqli_query($conn, $sql_film);
    $film = mysqli_fetch_assoc($film);
?>
<script>
    function getStudio(lokasi) {
        var film_id = <?php echo $film_id;?>;
        console.log('getStudio.php?id='+lokasi+"&film_id="+film_id)
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getStudio.php?id='+lokasi+"&film_id="+film_id, true);
        xmlhttp.send();
    }
    function getDate(studio) {
        var id_studio = studio.value;
        var film_id = <?php echo $film_id;?>;
        console.log('getDate.php?film_id='+film_id+"&studio_id="+id_studio);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox2").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getDate.php?id_lokasi='+lokasi+"&film_id="+film_id+"&studio_id="+id_studio, true);
        xmlhttp.send();
    }
    function getTime(tgl) {
        var id_studio = document.getElementsByName('studio_id')[0].value;
        var film_id = <?php echo $film_id;?>;
        var tgl = tgl.value;
        console.log('getTime.php?film_id='+film_id+"&studio_id="+id_studio+"&tgl="+tgl);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("rdBox3").innerHTML = this.responseText;
        }
        };
        xmlhttp.open("GET", 'getTime.php?film_id='+film_id+"&studio_id="+id_studio+"&tgl='"+tgl+"'", true);
        xmlhttp.send();
    }
    function clearSelection(){
        window.location = "";
    }
</script>
<style>
    .sched_film_info {
        padding-top : 25px;
        text-align : center;
    }
    .sched_film_info img {
        width : 150px;
    }
    .figure, .sched_film_info_right{
        display :inline-block;
        vertical-align : top;
    }
</style>
    <div class="container" style="border: 2px solid darkgrey; margin-top: 50px;">
        <div class="sched_film_info">
            <figure class="figure">
                <img src="<?php echo $film['url_foto']; ?>" class="figure-img img-fluid rounded" alt="...">
                <figcaption class="figure-caption text-center"><b><?php echo $film['nama_film'];?></b><br><b><?php ?></b></figcaption>
            </figure>
        </div>
        <form action="seats.php" method="GET">
            <div class="mb-3" style="display:none;">
                <input type="text" name="film_id" value="<?php echo $film_id;?>">
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Pilih Lokasi</label>
                <select class="form-select" aria-label="Default select example" name="lokasi" id="lokasi" onchange="getStudio(this.options[this.selectedIndex].value)">
                    <option selected>--- Pilih Lokasi ---</option>
                    <?php 
                        while($row = mysqli_fetch_assoc($location)){
                        
                    ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['wilayah'].'-'.$row['nama_lokasi']; ?></option>
                    <?php
                        }
                    ?>
                </select>
                
            </div>
            <div class="mb-3">            
                <div id="rdBox"></div>
            </div>
            <div class="mb-3">
                <div id="rdBox2"></div>
            </div>
            <div class="mb-3">
                <div id="rdBox3"></div>
            </div>
            <div class="row mb-3 ms-3 me-3">
                <button type="button" onclick="clearSelection()" class="btn btn-warning btn-block">Clear Selection</button>
            </div>
            <div class="row mb-3 ms-3 me-3">
                <button type="submit" class="btn btn-primary btn-block">Pilih Kursi</button>
            </div>
        </form>
    </div>

<?php 
    include('footer.php');
?>