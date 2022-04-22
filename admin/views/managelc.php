<?php 
    include('layouts/header.php');
    include('conn/connection.php');

    $sql = "SELECT * from lokasi";
    $result = mysqli_query($conn,$sql);
?>
    <div class="content-wrapper">
      <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Lokasi</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap" id="shows_data">
                    <thead class="table-primary">
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Wilayah</th>
                        <th>Nama Lokasi</th>
                        <!-- <th>Aksi</th> -->
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
                                <!-- <td>
                                  <button class="btn btn-warning">Edit</button>
                                  <a href="#" class="btn btn-danger">Delete</a>
                                </td> -->
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