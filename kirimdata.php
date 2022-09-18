<?php 

// koneksi database
include "./koneksi.php";

// menangkap parameter yang dikirim oleh esp 32
$kelembaban = $_GET['kelembaban'];

// simpan ke sensor
// atur ID dimulai dari 1
mysqli_query($koneksi,"ALTER TABLE sensor AUTO_INCREMENT = 1" );

// simpan nilai kelembaban ke table sensor
$simpan = mysqli_query($koneksi, "insert into sensor(kelembaban)values ('$kelembaban')");

// memberi respon ke esp 32
if($simpan)
    echo "Berhasil disimpan";
else
    echo "Gagal Menyimpan";



?>