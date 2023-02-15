<?php    
    // $mahasiswa = [
    //     ["Irsyadi", "20210410", "Informatika", "irsyadi@gmail.com"],

    //     ["Hanif", "20210415", "Informatika", "hanif@gmail.com"],

    //     ["Elnur", "20210420", "Informatika", "elnur@gmail.com"]
    // ];

    // Array Associative
    // key dari array adalah string yang kita buat sendiri
    $mahasiswa = [
        [
        "nama" => "Irsyadi", 
        "nim" => "20210410", 
        "jurusan" => "Informatika", 
        "email" => "irsyadi@gmail.com",
        "gambar" => "p01.jpg"
        ],
    
        [
        "nama" => "Hanif", 
        "nim" => "20210415", 
        "jurusan" => "Informatika", 
        "email" => "hanif@gmail.com",
        "gambar" => "p03.jpg"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>

    <style>
        .kotak {
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: salmon;
            margin: 3px;
            cursor: pointer;
            float: left;
            transition: 0.5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?php echo $mhs["gambar"]; ?>" width="100px" height="100px" alt="">
            </li>
            <li>Nama = <?= $mhs["nama"]; ?></li>
            <li>NIM = <?= $mhs["nim"]; ?></li>
            <li>Jurusan = <?= $mhs["jurusan"]; ?></li>
            <li>Email = <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>