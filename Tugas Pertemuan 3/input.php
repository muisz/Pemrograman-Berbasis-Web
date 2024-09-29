<?php

include "koneksi.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "INSERT INTO tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Terima kasih, data Anda telah disimpan!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Isi Buku Tamu</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f0;
                text-align: center;
            }
            h2 {
                color: #333;
                margin-top: 20px;
            }
            form {
                display: inline-block;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: left;
                width: 100%;
                max-width: 600px;
            }
            label {
                display: block;
                margin-bottom: 8px;
                font-weight: bold;
            }
            input[type="text"],
            input[type="email"],
            textarea {
                width: calc(100% - 20px); /* Menambahkan ruang agar tidak bertabrakan dengan tepi */
                padding: 8px;
                margin-bottom: 15px;
                border-radius: 4px;
                border: 1px solid #ccc;
            }
            textarea {
                height: 100px;
            }
            input[type="radio"] {
                margin-right: 10px;
            }
            .gender-label {
                margin-bottom: 8px;
            }
            .gender-options {
                margin-bottom: 15px;
            }
            button {
                background-color: #3498db;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                display: block;
                width: 100%;
                max-width: 150px;
                margin: 0 auto;
            }
            button:hover {
                background-color: #2980b9;
            }
            a {
                display: inline-block;
                margin-top: 20px;
                text-decoration: none;
                color: #3498db;
            }
        </style>
    </head>
    <body>
        <h2>Isi Buku Tamu</h2>
        <form method="post" action="input.php">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="komentar">Komentar:</label><br>
            <textarea id="komentar" name="komentar" required></textarea><br><br>

            <input type="submit" name="submit" value="Kirim">
        </form>
        <p><a href="index.php">Kembali ke halaman utama</a></p>
    </body>
</html>