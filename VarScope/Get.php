<?php 
    // super global, variabel superglobar milik PHP
    $mahasiswa = [
        [
        "nama" => "Irsyadi Elnur", 
        "nim" => "20210410", 
        "jurusan" => "Informatika", 
        "email" => "irsyadi@gmail.com",
        "gambar" => "p01.jpg"
        ],
    
        [
        "nama" => "Hanif Elnur", 
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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="Get02.php?nama=<?php echo $mhs["nama"]; ?>&nim=<?php echo $mhs["nim"]; ?>&jurusan=<?php echo $mhs["jurusan"]; ?>&email=<?php echo $mhs["email"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>