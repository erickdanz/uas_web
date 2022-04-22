<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    $sql = "SELECT jp.*, s.studio_no, l.nama_lokasi, l.wilayah, f.nama_film
            FROM jadwalpenayangan jp 
            JOIN studio s ON s.id = jp.id_studio 
            JOIN lokasi l on s.id_lokasi = l.id
            JOIN film f on f.id = jp.id_film";
    $result = mysqli_query($conn,$sql);
?>
    <div class="content-wrapper">
      <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Jadwal Penayangan</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="shows_data">
                    <thead class="table-primary">
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Wilayah</th>
                        <th>Teater</th>
                        <th>Studio</th>
                        <th>Film</th>
                        <th>Tanggal Tayang</th>
                        <th>Jam Tayang</th>
                        <th>Tiket Terbeli</th>
                        <th>Tiket Tersedia</th>
                        <th>Harga Tiket</th>
                        <th>Kursi Terbeli</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        if(mysqli_num_rows($result) > 0){
                          while($row = mysqli_fetch_assoc($result)){
                            ?>
                              <tr class="text-center">
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['wilayah']; ?></td>
                                <td><?php echo $row['nama_lokasi']?></td>
                                <td><?php echo $row['studio_no']; ?></td>
                                <td><?php echo $row['nama_film']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['jam_tayang']; ?></td>
                                <td><?php echo $row['tiket_terbeli']; ?></td>
                                <td><?php echo $row['tiket_tersedia']; ?></td>
                                <td><?php echo $row['harga_tiket']; ?></td>
                                <td><?php echo $row['kursi_terbeli']; ?></td>
                              </tr>
                            <?php
                          }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
      <script>
        $(function () {
          $('#shows_data').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

<?php 
    include('layouts/footer.php');
?>