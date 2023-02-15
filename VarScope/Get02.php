<?php 
    // cek apakah tidak ada data di $_GET
    if ( !isset($_GET["nama"]) || 
    !isset($_GET["nim"]) || 
    !isset($_GET["jurusan"]) || 
    !isset($_GET["email"]) || 
    !isset($_GET["gambar"])){
        // redirect, memindah paksakan user ke halaman lain
        header("location: GetPost.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>git post 02</title>
</head>
<body>
    <ul>
        <li><img src="../img/<?php echo $_GET["gambar"]; ?>" alt="foto1" width="150px" height="150px"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
    </ul>

    <a href="Get.php">Balik kehalaman pertama</a>
</body>
</html>