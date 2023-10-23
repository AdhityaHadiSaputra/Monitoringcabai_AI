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

$sqlc3 = "SELECT * FROM cabai3"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultc3 = $conn->query($sqlc3);

// Memeriksa apakah ada data yang diambil
if ($resultc3->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datac3 = array();
    while ($rowc3 = $resultc3->fetch_assoc()) {
        $datac3[] = $rowc3['tinggi']; // Ganti "Pertumbuhan" dengan kolom yang berisi data pertumbuhan tanaman
    }
} else {
    $datac3 = array();
}

$conn->close();

?>