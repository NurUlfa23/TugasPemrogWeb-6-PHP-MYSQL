<?php
$servername = "localhost"; // Membuat variabel servername yang menyimpan nilai "localhost"
$username = "root"; // Membuat variabel servername yang menyimpan nilai "root"
$password = ""; // Membuat variabel servername yang menyimpan nilai ""

// Create Connection
$conn = mysqli_connect($servername, $username, $password);
// Check Connection
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}
// Create Database
$sql = "CREATE DATABASE tb_bukutamu"; // Membuat database 
if (mysqli_query($conn, $sql)) { // Jika mysqli_query berhasil mengeksekusi variabel conn dan sql maka menampilkan pesan "New Record Created Succesfully"
	echo "New Record Created Succesfully"; //
} else { // Jika tidak akan menampilkan pesan "Error Creating Database" 
	echo "Error Creating Database: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn); // Menutup koneksi database
?>