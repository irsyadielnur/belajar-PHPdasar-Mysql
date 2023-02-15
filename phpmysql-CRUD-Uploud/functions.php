<?php 
    // koneksi ke databases
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        // ambil data dari tiap form
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);

        // uploud gambar
        $gambar = upload();
        if ( !$gambar ) {
            return false;
        }

        // query insert data
        $query = "INSERT INTO mahasiswa VALUES ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function upload() {
        $namaFile = $_FILES['gambar']['name'];
        $sizeFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName= $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diuploud
        if ( $error === 4 ) {
            echo "<script> 
                    alert('pilih gambar terlebih dahulu')
                </script>";

            return false;
        }
        
        // cek apakah gambar atau bukan
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script> 
                    alert('yang anda upload bukan gambar')
                </script>";

            return false;
        }

        // cek jika ukurannya terlalu besar
        if ( $sizeFile > 1000000 ) {
            echo "<script> 
                    alert('ukuran gambar terlalu besar')
                </script>";
                
            return false;
        }
        
        // lolos pengecekan, gambar siap di upload
        // generate nama gambar
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

        return $namaFileBaru;
    }


    function hapus ($id) {
        global $conn;

        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah ($data) {
        global $conn;

        // ambil data dari tiap form
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);

        // cek apakah user pilih gamabr baru atau tidak
        if ( $_FILES['gambar']['error'] === 4 ){
            $gambar = $gambarLama;
        } else {
            $gambar = upload();
        }

        $query = "UPDATE mahasiswa SET
                    nim = '$nim', 
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'

                    WHERE id  = $id
                    ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword){
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR 
        nim LIKE '%$keyword%' OR
        email LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        ";

        return query($query);
    }
?>