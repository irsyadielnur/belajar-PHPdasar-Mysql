<?php 
    // koneksi ke databases
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // ambil data dari database / query
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    // ambil data (fetch) dari object result
    // mysqli_fetch_row() mengembalikan array numerik
    // mysqli_fetch_assoc() mengembalikan array associative atau nama
    // mysqli_fetch_array() menampilkan secara numeric dan associative / nama
    // mysqli_fetch_object()

    // while untuk mngambil semua data yang ada pada database
    // while ($mhs = mysqli_fetch_assoc($result) ){
    // var_dump($mhs["nama"]);
    // }
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

        <?php echo $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="../img/<?= $row["gambar"]; ?>" alt="foto1" width="50px"></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["nim"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>