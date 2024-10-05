<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku Tamu</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f0f0f5;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            form {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }

            h2 {
                text-align: center;
                color: #333333;
            }

            label {
                font-size: 16px;
                color: #555555;
            }

            input[type="text"],
            textarea {
                width: calc(100% - 20px);
                padding: 10px;
                margin: 10px 0;
                border: 1px solid #cccccc;
                border-radius: 5px;
                font-size: 14px;
                background-color: #f9f9f9;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 16px;
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }
        </style>
    </head>
    <body>
        <form action="index.php" method="post">
            <h2>Selamat Datang di Buku Tamu</h2>
            <label for="name">Nama:</label><br>
            <input type="text" name="name" required><br><br>
            <label for="comment">Komentar:</label><br>
            <textarea name="comment" rows="5" required></textarea><br><br>
            <input type="submit" value="Kirim">
        </form>
    </body>
</html>
