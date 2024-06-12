<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['username'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor_telepon'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    // Escape user inputs for security
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $email = mysqli_real_escape_string($koneksi, $email);
    $nama = mysqli_real_escape_string($koneksi, $nama);
    $nomor = mysqli_real_escape_string($koneksi, $nomor);
    $jenis_kelamin = mysqli_real_escape_string($koneksi, $jenis_kelamin);

    // Query untuk menambah data ke dalam tabel akun
    $query = "INSERT INTO akun (username, email, nama, nomor_telepon, jenis_kelamin) VALUES ('$nama', '$email', $nama '$nomor_telepon', '$jenis_kelamin')";
    
    if (mysqli_query($koneksi, $query)) {
        // Data berhasil ditambahkan, arahkan ke halaman login
        header("Location: coollogin&register.html");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
