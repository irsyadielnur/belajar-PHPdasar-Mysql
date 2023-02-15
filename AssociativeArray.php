<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan Array</title>

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

    <?php 
        $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

        // cetak array multi dimensi
        // echo $angka[1][1];
    ?>

    <?php foreach ($angka as $key) : ?>
        <?php foreach ($key as $a) : ?>
             <div class="kotak"><?= $a; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>