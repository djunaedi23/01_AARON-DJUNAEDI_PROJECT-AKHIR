<?php
include 'koneksi.php';


$name = $_POST['name'];
$email=$_POST['email'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
$branch= isset($_POST['role']) ? implode(',', $_POST['role']) : '';
$interests=isset($_POST['interests']) ? implode(',', $_POST['interests']) : '';

mysqli_query($koneksi, "INSERT INTO info (name, email,password, branch, interests) VALUES ('$name', '$email', '$password', '$branch', '$interests')");

header("Location: index.php");
?>
