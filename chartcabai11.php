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

$sqlc11 = "SELECT * FROM cabai1"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultc11 = $conn->query($sqlc11);

// Memeriksa apakah ada data yang diambil
if ($resultc11->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datac11 = array();
    while ($rowc11 = $resultc11->fetch_assoc()) {
        $datac11[] = $rowc11['tanggal'];   // Ganti "Pertumbuhan" dengan kolom yang berisi data pertumbuhan tanaman
    }
} else {
    $datac11 = array();
}

$conn->close();

?>