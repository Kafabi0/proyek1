<?php
include "koneksi.php";
if (count($_POST) > 0)

{
    $username = $_POST["Username"];
    $email = $_POST["Email"];
    $nama = $_POST["Nama"];
    $nomor_telepon = $_POST["Nomor_telepon"];
    $jenis_kelamin = $_POST["Jenis_kelamin"];
    $query = "INSERT INTO akun (nama, email, password ) VALUES ('$nama', '$email', '$password )";
    if (mysqli_query($db_connect, $query)) {
        echo "data berhasil ditambahkan";
    } else {   
    echo "data berhasil ditambahkan";    
    }
}
?>
lihat data => <a href="lihat_data.php"/>lihat_data.php</a>