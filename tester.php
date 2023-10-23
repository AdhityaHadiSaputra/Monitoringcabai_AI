<!DOCTYPE html>
<html>
<head>
  <title>Tombol dan File PHP</title>
</head>
<body>

<!-- Tombol untuk menjalankan file.php -->
<button type="button" onclick="runPhpFile()">Jalankan File PHP</button>

<!-- Script JavaScript -->
<script>
  function runPhpFile() {
    // Buat objek XMLHttpRequest
    var xhttp = new XMLHttpRequest();

    // Tentukan tindakan saat permintaan selesai
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        // Aksi yang akan diambil jika permintaan berhasil
        console.log(this.responseText); // Outputkan hasil respon jika perlu
      }
    };

    // Kirim permintaan GET ke file.php
    xhttp.open("GET", "ambil_kendali.php", true);
    xhttp.send();
  }
</script>

</body>
</html>