<?php
session_start();
include 'koneksi.php'; 

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $query = "SELECT * FROM info WHERE email = '$email'";
    $result = mysqli_query($koneksi, $query);
    $info = mysqli_fetch_assoc($result);

    if ($info && password_verify($password, $info['password'])) {
 
        $_SESSION['email'] = $info['email'];
        $_SESSION['name'] = $info['name'];


        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Email atau password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Djunaedi Photography</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <header>
    <div class="logo">Djunaedi<span>Photography</span></div>
    <nav>
      <ul>
        <li><a href="homepage.html">Home</a></li>
        <li><a href="login.php" class="active">Login</a></li>
      </ul>
    </nav>
  </header>

  <section class="login-section">
    <h2>Welcome Back</h2>
    <p>Login to access your creative dashboard and manage your portfolio.</p>

    <form class="login-form" method="POST">
      <div class="form-grid">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
      </div>

      <div class="form-group checkbox-group" style="margin-top: 20px;">
        <label><input type="checkbox" name="remember"> Remember Me</label>
      </div>

      <button type="submit" name="login" class="btn submit-btn">Login</button>
      <a href="register.php">Don't have an account? Register here</a>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Djunaedi Photography</p>
  </footer>
</body>
</html>
