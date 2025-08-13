<?php
include 'connect.php';
$bookquery = mysqli_query($dbconnect, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Daftar Buku</h3>
    <a href="forminputBuku.php">Tambah Data +</a>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Judul Buku</th>
            <th>Deskripsi</th>
            <th>Halaman</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>

        <?php $no =1; 
        foreach ($bookquery as $row) { ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row["judul"]; ?></td>
            <td><?= $row["deskripsi"]; ?></td>
            <td><?= $row["halaman"]; ?></td>
            <td><?= $row["tanggal_terbit"]; ?></td>
            <td>Edit | Hapus</td>
          </tr>
        <?php } ?>
    </table>
</body>
</html>