<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .navbar {
            background:#85D021;
        }
        .navbar-brand, .nav-link {
            color: white !important;
            font-family: Arial, Helvetica, sans-serif;
        }
        .nav-link:hover {
            color: #ffc107 !important;
        }
        .navbar-toggler {
            border-color: white;
        }
        .navbar-toggler-icon {
            background-color: white;
        }
        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        /* Media query untuk perangkat mobile */
        @media (max-width: 768px) {
            .navbar-collapse {
                background-color: #85D021;
            }
            .navbar-nav .nav-link {
                color: white !important;
            }
        }
    </style>
    <title>Arogant Moto Club</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block">
      <span style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold; font-size: 14px; margin-left: 5px;">TEAM AROGANT</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produk.php">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="foto.php">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontak.php">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="table.php">Anggota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Akun</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
