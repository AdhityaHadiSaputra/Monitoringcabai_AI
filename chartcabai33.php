<?php

$servername = "localhost"; // Ganti dengan alamat server database Anda
$username = "id21005724_renrehan";    // Ganti dengan username untuk mengakses database
$password = "Ayambakar77.";    // Ganti dengan password untuk mengakses database
$dbname = "id21005724_sensorweb"; // Ganti dengan nama database yang ingin Anda akses

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlc33 = "SELECT * FROM cabai3"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultc33 = $conn->query($sqlc33);

// Memeriksa apakah ada data yang diambil
if ($resultc33->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datac33 = array();
    while ($rowc33 = $resultc33->fetch_assoc()) {
        $datac33[] = $rowc33['tanggal'];   // Ganti "Pertumbuhan" dengan kolom yang berisi data pertumbuhan tanaman
    }
} else {
    $datac33 = array();
}

$conn->close();

?>