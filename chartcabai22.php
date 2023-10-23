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

$sqlc22 = "SELECT * FROM cabai2"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultc22 = $conn->query($sqlc22);

// Memeriksa apakah ada data yang diambil
if ($resultc22->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datac22 = array();
    while ($rowc22 = $resultc22->fetch_assoc()) {
        $datac22[] = $rowc22['tanggal'];   // Ganti "Pertumbuhan" dengan kolom yang berisi data pertumbuhan tanaman
    }
} else {
    $datac22 = array();
}

$conn->close();

?>