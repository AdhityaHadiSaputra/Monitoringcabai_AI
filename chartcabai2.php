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

$sqlc2 = "SELECT * FROM cabai2"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultc2 = $conn->query($sqlc2);

// Memeriksa apakah ada data yang diambil
if ($resultc2->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datac2 = array();
    while ($rowc2 = $resultc2->fetch_assoc()) {
        $datac2[] = $rowc2['tinggi']; // Ganti "Pertumbuhan" dengan kolom yang berisi data pertumbuhan tanaman
    }
} else {
    $datac2 = array();
}

$conn->close();

?>