<?php
// Connect to database
include 'koneksi.php';

// Get the 'name' from the URL
$name = $_GET['name'];

// Delete the corresponding row in database
mysqli_query($koneksi, "DELETE FROM info WHERE name='$name'");

// Redirect back to index.php
header("Location: index.php");
exit;
?>
