<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | Djunaedi Photography</title>
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
    <h2>Join Our Creative Community</h2>
    <p>Sign up or log in to share your work and connect with other artists.</p>

    <form class="register-form" action="register_process.php" method="POST">
      <div class="form-grid">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>

        <div class="form-group">
          <label>Role</label>
          <div class="checkbox-group">
            <label><input type="checkbox" name="role[]" value="Photographer"> Photographer</label>
            <label><input type="checkbox" name="role[]" value="Videographer"> Videographer</label>
            <label><input type="checkbox" name="role[]" value="Both"> Both</label>
          </div>
        </div>

        <div class="form-group">
          <label>Interests</label>
          <div class="checkbox-group">
            <label><input type="checkbox" name="interests[]" value="Portraits"> Portraits</label>
            <label><input type="checkbox" name="interests[]" value="Weddings"> Weddings</label>
            <label><input type="checkbox" name="interests[]" value="Events"> Events</label>
            <label><input type="checkbox" name="interests[]" value="Nature"> Nature</label>
            <label><input type="checkbox" name="interests[]" value="Street"> Street</label>
          </div>
        </div>
      </div>

      <button type="submit" class="btn submit-btn">Submit</button>
      <a href="login.php">Already have an account? Login here</a>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Djunaedi Photography</p>
  </footer>
</body>
</html>
