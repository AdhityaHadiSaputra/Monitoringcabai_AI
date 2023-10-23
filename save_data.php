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
$sensorValue1 = $_POST['sensor_value1'];
$sensorValue2 = $_POST['sensor_value2'];
$sensorValue3 = $_POST['sensor_value3'];
$sensorValue4 = $_POST['val_digital'];

// Mendapatkan tanggal dan waktu saat ini
$timestamp = date('Y-m-d H:i:s');


// Menyimpan data ke database

$sql11 = "INSERT INTO cabai1 (tanggal, tinggi) VALUES ('$timestamp', '$sensorValue1' )";
$sql22 = "INSERT INTO cabai2 (tanggal, tinggi) VALUES ('$timestamp', '$sensorValue2' )";
$sql33 = "INSERT INTO cabai3 (tanggal, tinggi) VALUES ('$timestamp', '$sensorValue3' )";


if ($conn->query($sql11) === TRUE && $conn->query($sql22) === TRUE && $conn->query($sql33) === TRUE ) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
        
?>
