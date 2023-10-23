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
$sqlcb1 = "SELECT * FROM cabai1"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultcb1 = $conn->query($sqlcb1);

// Memeriksa apakah ada data yang diambil
if ($resultcb1->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datacb1 = array();
    while ($rowcb1 = $resultcb1->fetch_assoc()) {
        $datacb1[] = $rowcb1;
    }
} else {
    $datacb1 = array();
}

$conn->close();

?>