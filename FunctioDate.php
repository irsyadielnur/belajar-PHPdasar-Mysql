<?php 
    // function date (0, 0)
    echo date("l, d-F-Y");

    echo "<br />";

    // time, UNIX timestap / EPOCH time
    // detik yang sudah berlalu sejak 1 januari 1970
     echo time();

     echo "<br />";

    // menggabungkan 2 function
    echo date("l", time() + 60 * 60 * 24 * 2);
    echo "<br />";

    // function mktime, membuat detik sendiri
    // mktime(0, 0, 0, 0, 0, 0) | jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0, 20, 20, 6, 28, 2003));
    echo "<br />";

    // function strtotime
    echo date("l", strtotime("28 jun 2003"));
    echo "<br />";

    // function string
    // strlen();
    // echo "<br />";

    // strcmp();
    // echo "<br />";

    // explode();
    // echo "<br />";

    // function utility
    // var_dump();
    // echo "<br />";

    // isset();
    // echo "<br />";

    // empty();
    // echo "<br />";

    // die();
    // echo "<br />";

    // sleep();
    // echo "<br />";
?>