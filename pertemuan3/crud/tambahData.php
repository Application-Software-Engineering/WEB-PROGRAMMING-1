<?php
session_start();
include "../../pertemuan1/koneksi.php";

if (isset($_POST['submit'])) {
    $nipdMhs = $_POST['nipd'];
    $namaMhs = $_POST['nama'];
    $tglLahirMhs = $_POST['tgl_lahir'];
    $alamatMhs = $_POST['alamat'];

    $sql = "INSERT INTO mhs (NIPD, namaMhs, tanggalLahir, alamat) VALUES ('$nipdMhs', '$namaMhs', '$tglLahirMhs', '$alamatMhs')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil Ditambahkan!
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
            <h1 class="mb-4 text-center">Tambah Data Mahasiswa</h1>
            <!-- Add more content here -->
            <form action="" method="post" class="border border-success p-4 rounded shadow">
                    <div class="mb-3">
                    <label class="form-label" for="">NIPD</label>
                    <input type="text" name="nipd" class="form-control" maxlength="12" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" max="2006-12-31" required>
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="">Alamat</label>
                    <textarea class="form-control mb-3" name="alamat" id="" rows="3" required></textarea>
                    <button type="submit" name="submit" class="form-control btn btn-success mb-3">Submit</button>
                    <a href="../crud/home.php"><button type="button" class="form-control btn btn-primary" name="submit">Kembali</button></a>
                    </div>
                </form>
<?php include "../crud/footer.php"?>