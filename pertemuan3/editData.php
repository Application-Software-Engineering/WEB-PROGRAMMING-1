<!doctype html>
<?php
include "../pertemuan1/koneksi.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM mhs WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if (isset($_POST['update'])) {
    $nipdMhs = $_POST['nipd'];
    $namaMhs = $_POST['nama'];
    $tglLahirMhs = $_POST['tgl_lahir'];
    $alamatMhs = $_POST['alamat'];

    $sql = "UPDATE mhs SET NIPD = '$nipdMhs', namaMhs = '$namaMhs', tanggalLahir = '$tglLahirMhs', alamat = '$alamatMhs' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil Diupdate!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        
        $conn->close();
        header('Location: ../pertemuan1/tampilDataMhs.php');
        exit();
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Error : ".$sql."<br>".$conn->error."
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

}
?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Update Data Mahasiswa</title>
  </head>
  <body class="">
    <h1 class="text-center">Update Data Mahasiswa ASE</h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post" class="border border-success p-4 rounded shadow">
                    <div class="mb-3">
                    <label class="form-label" for="">NIPD</label>
                    <input type="text" name="nipd" class="form-control" maxlength="12" value="<?php echo $row['NIPD'];?>" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Nama</label>
                    <input type="text" name="nama" class="form-control" value="<?php echo $row['namaMhs'];?>" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" max="2006-12-31" value="<?php echo $row['tanggalLahir'];?>" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Alamat</label>
                    <textarea class="form-control mb-3" name="alamat" id="" rows="3" required><?php echo $row['alamat'];?></textarea>
                    <button type="submit" name="update" class="form-control btn btn-warning mb-3">Update</button>
                    <a href="../pertemuan1/tampilDataMhs.php"><button type="button" class="form-control btn btn-primary" name="submit">Kembali</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>