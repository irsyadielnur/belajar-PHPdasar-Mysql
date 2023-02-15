<?php 
    session_start();

    if ( !isset($_SESSION["login"])){
        header("location: login.php");
        exit;
    }
    // koneksi dengan halaman lainnya
    require "functions.php";

    // pagination & konfigurasi
    $jmldataHalaman = 2;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahLaman = ceil($jumlahData / $jmldataHalaman);

    $halamanActive = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;

    $awalData = ($jmldataHalaman * $halamanActive) - $jmldataHalaman;
    

    $mahasiswa = query ("SELECT * FROM mahasiswa LIMIT $awalData, $jmldataHalaman");

    // tombol cari diklik
    if ( isset ($_POST["cari"]) ){
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpmysql</title>
</head>
<body>
    <a href="logout.php">Logout!</a><br>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keywork pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>

    <!-- navigasi -->

    <?php if ( $halamanActive > 1 ) : ?>
        <a href="?halaman=<?= $halamanActive - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahLaman; $i++) : ?>
        <?php if ( $i == $halamanActive ) : ?>
        <a href="?halaman=<?= $i ?>" style="font-weight: bold; color:black; font-size:20px;"><?php echo $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor ?>

    <?php if ( $halamanActive < $jumlahLaman ) : ?>
        <a href="?halaman=<?= $halamanActive + 1; ?>">&raquo;</a>
    <?php endif; ?>


    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>nama</th>
            <th>nim</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah anda yaqin?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" alt="foto1" width="50px"></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>