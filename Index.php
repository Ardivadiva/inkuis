<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survei Situs Web</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
        }

        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        .container h1 {
            font-size: 24px;
            margin: 0;
            color: #333333;
        }

        .container p {
            font-size: 16px;
            color: #666666;
            margin: 10px 0 20px;
        }

        .image-container {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 0 auto 20px;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        .image-container .background-decor {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border-radius: 50%;
            background: linear-gradient(135deg, #ffd700, #ff6a6a);
            z-index: -1;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Survei Situs Web</h1>
        <p>Website Pemagangan PT. PAL Indonesia</p>
        <div class="image-container">
            <div class="background-decor"></div>
            <img src="poto/g.png" alt="Survey Image">
        </div>
        <a href="kuesioner.php" class="button">Mulai</a>
        <a href="login.php" class="button">Keluar</a>
    </div>
</body>
</html>
