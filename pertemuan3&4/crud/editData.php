<?php
session_start();
include "../../pertemuan1/koneksi.php";

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
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil Diupdate!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        
        $conn->close();
        header('Location: ../crud/home.php');
        exit();
    } else {
        $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Error : ".$sql."<br>".$conn->error."
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        $conn->close();
        header('Location: ../crud/home.php');
        exit();
    }

}
?>
<?php include "../crud/header.php"?>
            <h1 class="mb-4 text-center">Update Data Mahasiswa</h1>
            <!-- Add more content here -->
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
                    <a href="../crud/home.php"><button type="button" class="form-control btn btn-primary" name="submit">Kembali</button></a>
                    </div>
                </form>
<?php include "../crud/footer.php"?>