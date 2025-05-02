<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .sidebar {
            width: 200px;
            min-height: 100vh;
            background-color: #2e2e2e;
            color: white;
            padding: 20px;
            position: fixed;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color:rgb(44, 42, 42);
        }
        .content {
            margin-left: 250px;
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            width: 100%;
            background-color: gray;
            color: blak;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1000;
        }
        .logout-button {
            background-color: red;
            border: none;
            padding: 10px 15px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        .logout-button:hover {
            background-color: red;
        }
    </style>
</head>
<body>
    <!-- Sidebar bootstrap -->
     <div class="sidebar">
        <h4>Admin ASE</h4>
        <hr>
        <a href="#"><i class="bi bi-person-circle"></i> Data Mahasiswa</a>
        <a href="#"><i class="bi bi-person-circle"></i> Data Dosen</a>
        <a href="#"><i class="bi bi-gear"></i> Data Matakuliah</a>
     </div>

     <!-- Header dengan logout -->
      <div class="header">
        <h4>Data Mahasiswa ASE10</h4>
      </div>

      <!-- Body content -->
       <div class="content" style="margin-top: 70px;">
        <table class="table table-striped">
            <thead>
                <th>#</th>
                <th>NIPD</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                include "../../pertemuan1/koneksi.php";

                $sql = "SELECT id,NIPD,namaMhs,tanggalLahir,alamat FROM mhs";
                $result = $conn->query($sql);
                
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
        <a href="../pertemuan2/inputDataMhs.php"><button type="button" class="form-control btn btn-success" name="submit">Tambah Data</button></a>
       </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</html>