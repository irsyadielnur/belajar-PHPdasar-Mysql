<?php
    echo $nama = "Irsyadi<br />";

    // membuat array, dan boleh dengan type data yang berbeda
    // cara lama
    $hari = array("senin", "selasa", "Rabu");

    // cara baru
    $bulan = ["januari", "Februari"];

    // menampilkan array
    // bisa dengan var_dump() / print_r()
    var_dump($hari);
    echo "<br />";

    print_r($bulan);
    echo "<br />";

    // menampilkan 1 saja
    echo $hari[1];
    echo "<br />";
    echo "<br />";

    // menambahkan elemen array baru
    $hari[] = "kamis";
    $hari[] = "jum'at";
    var_dump($hari);

    


?>