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
// Mendapatkan status dari tabel (misalnya, bernama 'status_table')
$sql_duas = "SELECT status FROM duas ";
$result_duas = $conn->query($sql_duas);


if ($result_duas->num_rows > 0 & $result_duas1->num_rows > 0) {
    // Mengambil status dari hasil query
    $row_duas = $result_duas->fetch_assoc();
    $status = $row_duas["status"];

    header('Content-Type: application/json');
    echo json_encode(array("status" => "1"));

}
else {
    // Jika data tidak ditemukan, kirimkan respons dengan status 0
    header('Content-Type: application/json');
    echo json_encode(array("status" => "error"));
}

$conn->close();
?>
