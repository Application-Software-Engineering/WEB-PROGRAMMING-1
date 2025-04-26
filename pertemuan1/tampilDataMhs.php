<?php
include "koneksi.php";

$sql = "SELECT id,NIPD,namaMhs,tanggalLahir,alamat FROM mhs";
$result = $conn->query($sql);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <body class="text-center">
    <h1>Data Mahasiswa ASE</h1>
    <div class="container">
        <!-- <div class="row"> -->
            <div class="table-responsive">
              <table class="table align-middle">
                  <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">NIPD</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Tanggal Lahir</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $i=1;
                      if ($result->num_rows > 0) {
                          while ($row = $result->fetch_assoc()) {
                              echo "<tr>";
                              echo "<th scope='row'>".$i++."</th>";
                              echo "<td>".$row['NIPD']."</td>";
                              echo "<td>".$row['namaMhs']."</td>";
                              echo "<td>".$row['tanggalLahir']."</td>";
                              echo "<td>".$row['alamat']."</td>";
                              echo "<td><a href='../pertemuan3/editData.php?id=".$row['id']."'><button class='btn btn-warning'><i class='bi bi-pencil-fill'></i></button></a> | <a href='../pertemuan3/prosesHapus.php?id=".$row['id']."'><button class='btn btn-danger'><i class='bi bi-trash3-fill'></i></button></a></td>";
                              echo "</tr>";
                          }
                      }
                      ?>

                  </tbody>
                </table>
              </div>
              <a href="../pertemuan2/inputDataMhs.php"><button type="button" class="form-control btn btn-success" name="submit">Tambah Data</button></a>
            <!-- </div> -->
          </div>
          

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>