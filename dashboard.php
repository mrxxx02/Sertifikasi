<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Set the size of the side navigation */
        .sidenav {
            height: 100%; /* Full-height */
            width: 250px; /* Set the width of the sidebar */
            position: fixed; /* Fixed Sidebar (stay in place on scroll) */
            z-index: 1; /* Stay on top */
            top: 0; /* Stay at the top */
            left: 0;
            background-color:chartreuse;
            padding-top: 60px; /* Place content 60px from the top */
        }

        /* The navigation menu links */
        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: #222;
            display: block;
            transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidenav a:hover {
            color: #ff6600;
        }

        /* Style page content */
        .main {
            margin-left: 250px; /* Same width as the sidebar */
            padding: 20px;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 16px;}
        }

        .row{
            justify-content: auto;
            height: 100px;
            width: 100%;
        }
    </style>
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

<!-- The sidebar -->
<div class="sidenav">
        <div class="text-center mb-4">
            <img src="logo.png" alt="Admin" class="shadow-sm" style="width: 100px; border-radius: 15px; transition: transform 0.3s;">
            <marquee width="60%" direction="right" height="50px" scrollamount="2">
            <h5 class="mt-2 text-white"> Arrogant Moto Club</h5>
            </marquee>
           
        </div>
    <a href="dashboard.php" class="nav-link"><i class="fas fa-home"></i> Dashboard</a>
    <a href="anggota.php"><i class="fas fa-chart-bar"></i> Anggota</a>
    <a href="table.php"><i class="fas fa-table"></i> Tables</a>
    <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
    <a href="login.php"><i class="fas fa-sign-out-alt"></i> Logout</a>

</div>

<!-- Page content -->
<div class="main">
    <div class="container" id="">
    <h2><a href="dashbord.php" class="text-decoration-none text-dark">DATA MOTOR TERBARU </a></h2>
        <h5>Selamat Datang Di Admin Dashboard</h5>
        <br>
        <br>
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
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>