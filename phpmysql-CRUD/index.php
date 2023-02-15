<?php 
    // koneksi dengan halaman lainnya
    require "functions.php";
    $mahasiswa = query ("SELECT * FROM mahasiswa");

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
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keywork pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br><br>

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
            <td><img src="../img/<?= $row["gambar"]; ?>" alt="foto1" width="50px"></td>
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