<?php 
    require "functions.php";
    // apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"]) ){
        if ( tambah($_POST) > 0){
            echo "
                <script>
                alert ('data berhasil ditambahakan!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "<script>
                alert ('data GAGAL ditambahakan!');
                document.location.href = 'index.php';
                </script>
                ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambahkan data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">balik halaman</a>
    
</body>
</html>