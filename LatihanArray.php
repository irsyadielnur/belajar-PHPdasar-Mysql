<?php
    $mahasiswa = [
        ["Irsyadi", "20210410700015", "Teknik Informatika", "irsyadihanif08@gmail.com"], 

        ["Hanif", "20210410700018", "Teknik Informatika", "hanifelnur08@gmail.com"]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- cara pertama jika data mahasiswa cuma satu -->
    <!-- <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul> -->

    <!-- cara kedua jika data mahasiswa lebih dari satu -->
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama :<?php echo $mhs[1]; ?></li>
        <li>NIM :<?php echo $mhs[2]; ?></li>
        <li>Jurusan :<?php echo $mhs[3]; ?></li>
        <li>Email :<?php echo $mhs[0]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>