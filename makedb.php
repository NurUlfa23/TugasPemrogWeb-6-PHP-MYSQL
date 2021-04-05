<?php
$servername = "localhost"; // Membuat variabel servername yang menyimpan nilai "localhost"
$username = "root"; // Membuat variabel servername yang menyimpan nilai "root"
$password = ""; // Membuat variabel servername yang menyimpan nilai ""
// Create Connection
$conn = mysqli_connect($servername, $username, $password);
// Check Connection
if (!$conn) {
	die ("Connection failed: " . mysqli_connect_error());
}

// Create Database
$sql = "CREATE DATABASE myDB";
if (mysqli_query($conn, $sql)) {
	echo "Database Created Successfully"; // Jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka menampilkan pesan "Database Created Successfully"
} else {
	echo "Error Creating Database: " . mysqli_error($conn); // Jika tidak akan menampilkan pesan "Error Creating Database"
}

mysqli_close($conn); // Menutup koneksi database
?>