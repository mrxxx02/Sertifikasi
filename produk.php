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
    <div class="card-container">
        <div class="card">
            <img src="keychain.jpg" class="card-img-top" alt="keychain">
            <div class="card-body">
                <h5 class="card-title">TEAMAROGAN "TRC" KEYCHAIN</h5>
                <p class="card-text">Rp39.000</p>
                <a href="https://www.tokopedia.com/teamarogann/teamarogan-trc-keychain-hijau-706f2?extParam=src%3Dshop%26whid%3D1483447" 
                class="btn btn-primary" target="_blank">Lihat Produk</a>
            </div>
        </div>
        <div class="card">
            <img src="jaket.jpg" class="card-img-top" alt="hoodie">
            <div class="card-body">
                <h5 class="card-title">TARGN "WORLDCHAMP" HOODIE</h5>
                <p class="card-text">Rp385.000</p>
                <a href="https://www.tokopedia.com/teamarogann/targn-worldchamp-hoodie-xxl-58154?extParam=whid%3D1483447%26src%3Dshop"  
                class="btn btn-primary" target="_blank">Lihat Produk</a>
            </div>
        </div>
        <div class="card">
            <img src="jaket2.jpg" class="card-img-top" alt="hoodie">
            <div class="card-body">
                <h5 class="card-title">THE LAST TEAMAROGAN "RACINGWHEELS" HOODIE</h5>
                <p class="card-text">Rp330.000</p>
                <a href="https://www.tokopedia.com/teamarogann/the-last-teamarogan-racingwheels-hoodie?extParam=src%3Dshop"
                class="btn btn-primary" target="_blank">Lihat Produk</a>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>
<?php include 'footer.php'; ?>
</body>
</html>
