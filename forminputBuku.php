<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Formulir Tambah Buku</h3>
    <a href="index.php">Kembali ke Daftar</a>
    <form action="create.php" method="post">
        <label for= "judul"> Judul</label>
        <input type="text" name="judul" id="judul"><br>

        <label for= "deskripsi"> Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi"></textarea><br>

        <label for= "halaman"> Jumlah Halaman</label>
        <input type="number" name="halaman" id="halaman" min="1"><br>

        <label for= "tanggal"> Tanggal Terbit</label>
        <input type= "date" name="tanggal_terbit" id="tanggal terbit"><br>
        <input type= "submit" value="tambah" name="input">
        

</body>
</html>