<?php
include "koneksi.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="container">
    <h1>Input Data Mahasiswa ASE</h1>

    <form action="" method="post">
    <div class="form-group">
        <label for="nipd">NIPD</label>
        <input type="text" class="form-control" name="nipd" placeholder="NIPD Mahasiswa">
    </div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Nama Mahasiswa">
    </div>
    <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir Mahasiswa">
    </div>
    <div class="form-group">
        <label for="alamat">Nama</label>
        <input type="text" class="form-control" name="alamat" placeholder="Alamat Mahasiswa">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>        
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (!empty($_POST)) {
    $nipdMhs = $_POST['nipd'];
    $namaMhs = $_POST['nama'];
    $tglLahirMhs = $_POST['tgl_lahir'];
    $alamatMhs = $_POST['alamat'];

    $sql1 = "INSERT INTO `mhs` (`id`, `NIPD`, `namaMhs`, `tanggalLahir`, `alamat`, `created_at`, `updated_at`) VALUES (NULL, '$nipdMhs', '$namaMhs', '$tglLahirMhs', '$alamatMhs', current_timestamp(), NULL)";
    $conn->query($sql1);
}
?>