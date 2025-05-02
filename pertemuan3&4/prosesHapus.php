<?php
session_start();
include "../pertemuan1/koneksi.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM mhs WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['alert'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Berhasil Ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } else {
        $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Error : ".$sql."<br>".$conn->error."
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
} else {
    $_SESSION['alert'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Mahasiswa Tidak Ditemukan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
}

$conn->close();
header('Location: ../pertemuan1/tampilDataMhs.php');
exit();
?>