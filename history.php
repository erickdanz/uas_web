<?php 
    include('users/conn/connection.php');
    include('header.php');
    
    $user_id = $_SESSION['user_id'];
    $sql_detail = "SELECT p.*, jp.harga_tiket, jp.date, jp.jam_tayang, s.studio_no, l.wilayah, l.nama_lokasi, f.nama_film FROM pembelian p
                    JOIN jadwalpenayangan jp ON jp.id = p.id_shows
                    JOIN studio s ON s.id = jp.id_studio
                    JOIN film f ON f.id = jp.id_film
                    JOIN lokasi l ON l.id = s.id_lokasi
                    WHERE p.id_user = $user_id ORDER BY p.id ASC";
    $result_detail = mysqli_query($conn,$sql_detail);
    
?>
    <div class="container">
        <h1 class="mt-5">History Pembelian </h1>
        <table class="table mt-2">
            <thead>
                <tr class="table-dark">
                    <th scope="col">#</th>
                    <th scope="col">Nama Film</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Tanggal & Jam Tayang</th>
                    <th scope="col">Detail Pembelian Tiket</th>
                    <th scope="col">Metode Pembayaran</th>
                    <th scope="col">Dipesan tanggal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($row = mysqli_fetch_assoc($result_detail)){
                ?>
                    <tr>
                        <th scope="row"><?= $row['id'];?></th>
                        <td><?= $row['nama_film']; ?></td>
                        <td><?= $row['wilayah'].' - '.$row['nama_lokasi']; ?></td>
                        <td><?= $row['studio_no'];?></td>
                        <td><?= $row['date'].' - '.$row['jam_tayang'];?></td>
                        <td>
                        <p style="max-width : 150px;">
                            Total : <?= $row['jlh_tiket']; ?>
                            Detail : <span style="max-width : 150px;"><?= $row['detail_tiket'];?></span>
                        </p>
                        </td>
                        <td><?= $row['metode_pembayaran'];?></td>
                        <td><?= $row['created_at'];?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
<?php 
    include('footer.php');
?>