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
$sqlcb2 = "SELECT * FROM cabai2"; // Ganti "nama_tabel" dengan nama tabel yang sesuai
$resultcb2 = $conn->query($sqlcb2);

// Memeriksa apakah ada data yang diambil
if ($resultcb2->num_rows > 0) {
    // Mengembalikan data dalam bentuk array
    $datacb2 = array();
    while ($rowcb2 = $resultcb2->fetch_assoc()) {
        $datacb2[] = $rowcb2;
    }
} else {
    $datacb2 = array();
}

$conn->close();

?>