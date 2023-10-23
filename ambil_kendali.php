<?php
// Contoh script PHP untuk mengontrol ESP32-CAM
$esp32CamUrl = "http://alamat_ip_esp32cam/control"; // Ganti dengan alamat IP ESP32-CAM dan path yang sesuai

// Kirim permintaan HTTP GET ke ESP32-CAM
$response = file_get_contents($esp32CamUrl);

// Tampilkan respon dari ESP32-CAM
echo $response;
?>