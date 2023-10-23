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

// Mendapatkan data dari tabel di database
$sqlcb3 = "SELECT * FROM cabai3"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultcb3 = $conn->query($sqlcb3);

// Memeriksa apakah ada data yang diambil
if ($resultcb3->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datacb3 = array();
    while ($rowcb3 = $resultcb3->fetch_assoc()) {
        $datacb3[] = $rowcb3;
    }
} else {
    $datacb3 = array();
}

$conn->close();

?>