<?php 
    session_start();

    if ( !isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }
    
    require "functions.php";

    // ambil data di url
    $id = $_GET["id"];
    // query data mahasiswa berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    // apakah tombol submit sudah ditekan atau belum
    if ( isset($_POST["submit"]) ){
        if ( ubah($_POST) > 0){
            echo "
                <script>
                alert ('data berhasil diubah!');
                document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "<script>
                alert ('data GAGAL diubah!');
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
    <title>Ubah data</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?php echo $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" required value="<?php echo $mhs["nim"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required value="<?php echo $mhs["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" required value="<?php echo $mhs["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" required value="<?php echo $mhs["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label><br>
                <img src="img/<?php echo $mhs["gambar"]; ?>" width="50px" height="50px" alt=""><br>
                <input type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah data</button>
            </li>
        </ul>
    </form>

    <a href="index.php">balik halaman</a>
    
</body>
</html>