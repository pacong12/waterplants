<?php 

// koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "db_sensor");

// menangkap parameter yang dikirim oleh esp 32
$kelembaban = $_GET['kelembaban'];

// simpan ke tb_sensor
// atur ID dimulai dari 1
mysqli_query($koneksi,"ALTER TABLE tb_sensor AUTO_INCREMENT = 1" );

// simpan nilai kelembaban ke table sensor
$simpan = mysqli_query($koneksi, "insert into tb_sensor(kelembaban)values ('$kelembaban')");

// memberi respon ke esp 32
if($simpan)
    echo "Berhasil disimpan";
else
    echo "Gagal Menyimpan";



?>