<?php
include 'connect.php';


if (isset($_POST['input'])) {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $halaman = $_POST['halaman'];
    $tanggal_terbit = $_POST['tanggal_terbit'];

    $sql = "INSERT INTO buku (judul, deskripsi, halaman, tanggal_terbit) VALUES ('$judul', '$deskripsi', $halaman, '$tanggal_terbit')";

    $query = mysqli_query($dbconnect, $sql);

    if ($query) {
        header ('location: index.php?message=successfully-adding-data');
    } else {
        header ('location: index.php?message=failed-adding-data');
    }
}