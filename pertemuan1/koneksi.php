<?php 

$server = "127.0.0.1";
$username = "root";
$pass = "";
$db = "mahasiswa";

$conn = new mysqli($server, $username, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal : ". $conn->connect_error);
}
?>