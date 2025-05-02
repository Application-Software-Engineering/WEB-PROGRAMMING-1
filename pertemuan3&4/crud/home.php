<?php
session_start();
include "../../pertemuan1/koneksi.php";

$sql = "SELECT id,NIPD,namaMhs,tanggalLahir,alamat FROM mhs";
$result = $conn->query($sql);

if (isset($_SESSION['alert'])) {
    echo $_SESSION['alert'];
    unset($_SESSION['alert']);
}
?>
<?php include "../crud/header.php"?>
            <h1 class="mb-4 text-center">Data Mahasiswa ASE</h1>
            <!-- Add more content here -->
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
                              echo "<td><a href='../crud/editData.php?id=".$row['id']."'><button class='btn btn-warning'><i class='bi bi-pencil-fill'></i></button></a> | <a href='../crud/prosesHapus.php?id=".$row['id']."'><button class='btn btn-danger'><i class='bi bi-trash3-fill'></i></button></a></td>";
                              echo "</tr>";
                          }
                      }
                      ?>

                  </tbody>
                </table>
              </div>
              <a href="../crud/tambahData.php"><button type="button" class="form-control btn btn-success" name="submit">Tambah Data</button></a>
              
              
              <div aria-live="polite" aria-atomic="true" class="position-absolute 
                top-0 end-20" style="min-height: 200px;">
              <div class="toast show">
    <div class="toast-header">
        <img src="download.png" width="40px" height="40px" alt="notif">
      <strong class="me-auto">Notifikasi</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
    </div>
    <div class="toast-body">
      <p class="text-success">Data Berhasil Di Ubah!</p>
    </div>
  </div>
</div>
              <?php include "../crud/footer.php"?>