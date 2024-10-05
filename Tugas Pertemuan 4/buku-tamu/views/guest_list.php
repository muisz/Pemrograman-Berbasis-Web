<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Komentar</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f5;
                margin: 0;
                padding: 20px;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                height: 100vh;
            }

            h3 {
                text-align: center;
                color: #333333;
            }

            table {
                width: 100%;
                max-width: 800px;
                border-collapse: collapse;
                background-color: #ffffff;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
            }

            th, td {
                padding: 12px;
                text-align: left;
                border-bottom: 1px solid #dddddd;
            }

            th {
                background-color: #4CAF50;
                color: white;
                font-weight: bold;
            }

            tr:nth-child(even) {
                background-color: #f9f9f9;
            }

            tr:hover {
                background-color: #f1f1f1;
            }

            .container {
                margin-left: 20px;
            }

            .pagination {
                display: flex;
                justify-content: center;
                margin-top: 20px;
            }

            .pagination a {
                color: #4CAF50;
                padding: 8px 16px;
                text-decoration: none;
                border: 1px solid #dddddd;
                margin: 0 4px;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .pagination a.active {
                background-color: #4CAF50;
                color: white;
                border: 1px solid #4CAF50;
            }

            .pagination a:hover {
                background-color: #45a049;
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Daftar Komentar</h3>
            <table>
                <tr>
                    <th>Nama</th>
                    <th>Komentar</th>
                    <th>Waktu</th>
                </tr>
                <?php while ($row = $guests->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['comment']); ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                    </tr>
                <?php } ?>
            </table>

            <div class="pagination">
                <a href="#">&laquo; Previous</a>
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">Next &raquo;</a>
            </div>
        </div>
    </body>
</html>
