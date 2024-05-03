<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Motorcycle Theme</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?motorcycle');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 0;
            color: white;
        }
        .form-outline {
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            border-radius: 20px;
            padding: 25px; /* Mengurangi padding */
            width: 400px; /* Lebar form */
        }
        .form-outline .form-control {
            background-color: transparent;
            border: none;
            border-bottom: 1px solid white;
            border-radius: 0;
            color: white;
            padding-left: 10px; /* Padding kiri */
            padding-right: 10px; /* Padding kanan */
            width: calc(100% - 20px); /* Mengurangi lebar input */
            margin-bottom: 15px; /* Mengurangi margin bawah */
        }
        .form-outline .form-control:focus {
            box-shadow: none;
            border-color: white;
        }
        .btn-primary {
            background-color: #ff6600;
            border-color: #ff6600;
            border-radius: 20px;
            padding-left: 20px; /* Padding kiri */
            padding-right: 20px; /* Padding kanan */
        }
        .btn-primary:hover {
            background-color: #cc5500;
            border-color: #cc5500;
        }
        .btn-link {
            color: white;
        }
    </style>
</head>
<body>
<form class="form-outline">
  <!-- Email input -->
  <div class="form-outline1 mb-3">
    <input type="email" id="form2Example1" class="form-control" />
    <label class="form-label" for="form2Example1"><i class="fas fa-envelope"></i> Email address</label>
  </div>

  <!-- Password input -->
  <div class="form-outline1 mb-3">
    <input type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2"><i class="fas fa-lock"></i> Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!" class="btn-link">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <a href="dashboard.php" class="btn btn-primary btn-block mb-4">Sign in</a>

  <!-- Register buttons -->
  <div class="text-center">
    <p class="mb-0">Not a member? <a href="#!" class="btn-link">Register</a></p>
    <p class="mb-0">or sign up with:</p>

    <a href="https://www.facebook.com" class="btn btn-link btn-floating mx-1" target="_blank">
      <i class="fab fa-facebook-f"></i>
    </a>

    <a href="https://www.google.com" class="btn btn-link btn-floating mx-1" target="_blank">
      <i class="fab fa-google"></i>
    </a>

    <a href="https://www.twitter.com" class="btn btn-link btn-floating mx-1" target="_blank">
      <i class="fab fa-twitter"></i>
    </a>

    <a href="https://www.github.com" class="btn btn-link btn-floating mx-1" target="_blank">
      <i class="fab fa-github"></i>
    </a>

    </button>
  </div>
</form>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
