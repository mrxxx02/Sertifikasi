<!DOCTYPE html>
<html>
<?php include 'navbar.php'; ?>
<?php include 'koneksi.php'; ?>
<head>
    <title>Tentang Kami - Arogant Moto Club</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-box {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .register-link {
            text-align: center;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="login-box">
        <h2>Login</h2>
        <form action="dashboard.php" method="POST">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br><br>
            <input type="submit" value="Login">
        </form>
        <div class="register-link">
            <p>Belum punya akun? <a href="daftar.php">Daftar disini</a></p>
        </div>
    </div>

    <div id="register" class="login-box" style="display:none;">
        <h2>Register</h2>
        <form action="daftar.php" method="post">
            <label for="new_username">Username:</label><br>
            <input type="text" id="new_username" name="new_username"><br>
            <label for="new_password">Password:</label><br>
            <input type="password" id="new_password" name="new_password"><br><br>
            <input type="submit" value="register">
        </form>
        <div class="register-link">
            <p>Sudah punya akun? <a href="dashboard.php">Login disini</a></p>
        </div>
    </div>

    <script>
        // Script untuk menampilkan form registrasi saat link "Daftar disini" diklik
        document.querySelector('.register-link a').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('register').style.display = 'block';
            document.querySelector('.login-box').style.display = 'none';
        });
        // Script untuk kembali ke form login saat link "Login disini" diklik
        document.querySelector('#register .register-link a').addEventListener('click', function(event) {
            event.preventDefault();
            document.querySelector('.login-box').style.display = 'block';
            document.getElementById('register').style.display = 'none';
        });
    </script>
    <script src="js/bootstrap.min.js"></script>
    <br><br>
</body>
</html>
<?php include 'footer.php'; ?>


