<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lihat Buku Tamu</title>
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
            table {
                width: 80%;
                margin: 20px auto;
                border-collapse: collapse;
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            table, th, td {
                border: 1px solid #ddd;
            }
            th, td {
                padding: 12px;
                text-align: left;
            }
            th {
                background-color: #3498db;
                color: white;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            p {
                font-size: 14px;
                line-height: 1.5;
                margin-top: 20px;
            }
            .last-entry {
                font-weight: bold;
                color: #3498db;
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
        <h2>Daftar Buku Tamu</h2>

        <?php
            $sql = "SELECT nama, email, komentar, tanggal FROM tamu ORDER BY tanggal DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Nama</th><th>Email</th><th>Komentar</th><th>Tanggal</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["email"]) . "</td>";
                    echo "<td>" . htmlspecialchars($row["komentar"]) . "</td>";
                    echo "<td>" . $row["tanggal"] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "<tr><td colspan='4'>Belum ada data tamu.</td></tr>";
            }
            $conn->close();
        ?>
        <!--Akhir kode PHP-->
        <a href="index.php">Kembali ke halaman utama</a>
    </body>
</html>