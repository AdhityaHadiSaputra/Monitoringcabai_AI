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


// Mendapatkan data dari HTTP POST request

$sensorValue4 = $_POST['val_digital'];

// Mendapatkan tanggal dan waktu saat ini
$timestamp = date('Y-m-d H:i:s');


// Menyimpan data ke database


$sql44 = "INSERT INTO duas (tanggal, status) VALUES ('$timestamp', '$sensorValue4' )";


if ($conn->query($sql44) === TRUE) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
        
?>
