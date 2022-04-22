<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    $sql = "SELECT p.*, jp.harga_tiket, jp.date, jp.jam_tayang, s.studio_no, l.wilayah, l.nama_lokasi, f.nama_film FROM pembelian p
            JOIN jadwalpenayangan jp ON jp.id = p.id_shows
            JOIN studio s ON s.id = jp.id_studio
            JOIN film f ON f.id = jp.id_film
            JOIN lokasi l ON l.id = s.id_lokasi
            ORDER BY p.id ASC";
    $result_detail = mysqli_query($conn,$sql);
?>
    <div class="content-wrapper">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pembelian Pelanggan</h3>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap" id="shows_data">
                  <thead>
                    <tr class="table-primary text-center">
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
                            <tr class="text-center">
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