<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'get_value') {
        // Tambahkan kode di sini untuk mengambil nilai dari database atau melakukan tindakan lain sesuai kebutuhan Anda
        $nilai = 1; // Contoh: nilai statis 1

        header('Content-Type: text/plain');
        echo $nilai;
        exit;
    }
}
?>