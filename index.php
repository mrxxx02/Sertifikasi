<!DOCTYPE html>
<html>
<head>
    <?php include 'koneksi.php' ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Digital Talent</title>
    <style>
        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            width: 20rem;
        }
    </style>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <div style="position: relative; text-align: center;">
        <img src="2.png" width="100%" height="100%" alt="logo" style="box-shadow: 20px 4px 20px rgba(0, 0, 0, 0.9);">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;  color: white;">
            <h1 style=" font-size: 75px; text-shadow: 8px 8px 8px rgba(0,0,0,0.9)">Arogant Moto Club</h1>
            <h3 style="font-style:italic; text-shadow: 8px 5px 8px rgba(0,0,0,0.9)">" Enjoy your street, enjoy your journey "</h3>
            <button type="button" class="btn btn-primary" onclick="location.href='menu_login.php'">Join With Us!</button>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
