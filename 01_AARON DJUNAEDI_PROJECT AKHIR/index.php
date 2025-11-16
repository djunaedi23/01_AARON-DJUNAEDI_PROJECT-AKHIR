<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registered Users | Djunaedi Photography</title>
  <link rel="stylesheet" href="stylesheet.css">

  <style>
    .table-section {
      padding: 120px 50px;
      max-width: 1100px;
      margin: auto;
    }

    .table-section h2 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 2.2em;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: #fff;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
    }

    table th {
      background: #e63946;
      color: #fff;
      padding: 15px;
      font-size: 1em;
    }

    table td {
      padding: 12px 15px;
      border-bottom: 1px solid #eee;
      text-align: center;
      color: #333;
    }

    table tr:hover {
      background: #fafafa;
    }

    .options a {
      margin: 0 6px;
      padding: 6px 14px;
      background: #e63946;
      color: #fff;
      border-radius: 6px;
      text-decoration: none;
      font-size: 0.9em;
      transition: .2s ease;
    }

    .options a:hover {
      background: #c82333;
    }

    .back-btn {
      margin-top: 40px;
      text-align: center;
    }

    .back-btn a {
      background: #111;
      color: #fff;
      padding: 12px 25px;
      border-radius: 6px;
      text-decoration: none;
      transition: .2s;
    }

    .back-btn a:hover {
      background: #333;
    }
  </style>
</head>

<body>


  <header>
    <div class="logo">Djunaedi<span>Photography</span></div>
    <nav>
      <ul>
        <li><a href="homepage.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a class="active" href="#">Registered Users</a></li>
        <li><a href="register.php">Register?</a></li>
      </ul>
    </nav>
  </header>


  <section class="table-section">
    <h2>Registered User Information</h2>

    <table>
      <tr>
          <th>No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Branch</th>
          <th>Interests</th>
          <th>Options</th>
      </tr>

      <?php
      include 'koneksi.php';
      $no = 1;
      $data = mysqli_query($koneksi, "SELECT * FROM info");

      while ($d = mysqli_fetch_array($data)) {
      ?>
          <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['name']; ?></td>
              <td><?php echo $d['email']; ?></td>
              <td><?php echo $d['branch']; ?></td>
              <td><?php echo $d['interests']; ?></td>
              <td class="options">
                  <a href="delete.php?name=<?php echo $d['name']; ?>">DELETE</a>
              </td>
          </tr>
      <?php } ?>
    </table>

    <div class="back-btn">
      <a href="homepage.html">Go Back</a>
    </div>
  </section>

</body>
</html>
