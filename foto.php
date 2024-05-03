<!DOCTYPE html>
<html lang="en">
<?php include 'navbar.php'; ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 40px;
        }
        .gallery img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 6 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Galeri Foto</h1>
        <div class="gallery">
            <img src="1.png" alt="Photo 1">
            <img src="2.png" alt="Photo 2">
            <img src="3.png" alt="Photo 3">
            <img src="jaket.jpg" alt="Photo 4">
            <img src="keychain.jpg" alt="Photo 5">
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'footer.php'?>
</body>
</html>

